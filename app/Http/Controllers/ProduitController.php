<?php

namespace Eemi\Http\Controllers;

use Eemi\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
	/* cette methode est appelée dans routes/web.php via l'url /liste_produits */
    public function listeProduits(){

    	// je recupere tous les produits
    	$data['okok'] = 'nimporte quoi';
    	$data['okok2'] = 'nimporte quoi encore';
    	$data['produits'] = Produit::all(); // j'envoie tous les sproduits, et chaque produit devient un objet PHP dont les propriétés sont les champs de la table Produits

    	// je les envois à la vue
    	return view('liste_produits', $data);
    }


    public function formulaireProduit() {
    	return view('formulaire_produit');
    }

    public function enregistrerProduit(Request $request){
    	dump($request->all());
    	dump($request->titre);
    	dump($request->reference);
    	dump($request->prix);
    	dump($request->quantite);

    	// je crée un nouvel objet Produit, qui sera donc la representation de mon produit avant enregistrement en BDD
    	$produit = new Produit();

    	// je renseigne les propriétés de mon objet Produit avec les valeurs récupérées du formulaire ($request)
    	$produit->titre = $request->titre;
    	$produit->reference = $request->reference;
    	$produit->prix = $request->prix;
    	$produit->quantite = $request->quantite;

    	// j'enregistre le produit en BDD
    	$produit->save();

    	// je fais une redirection vers la page liste des produits
    	return redirect()->route('produit.liste');


    }
}

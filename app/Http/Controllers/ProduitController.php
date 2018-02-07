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
    	$data['produits'] = Produit::all(); // j'envoie tous le sproduits, et chaque produit devient un objet PHP dont les propriétés sont les champs de la table Produits

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
    }
}

<?php

namespace Eemi\Http\Controllers;

use Eemi\Http\Requests\ProduitRequest;
use Eemi\Produit;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
      $data['action'] = 'ajouter';
    	return view('formulaire_produit', $data);
    }

    public function enregistrerProduit(ProduitRequest $request){
//    	dump($request->all());
//    	dump($request->titre);
//    	dump($request->reference);
//    	dump($request->prix);
//    	dump($request->quantite);

    	// je crée un nouvel objet Produit, qui sera donc la representation de mon produit avant enregistrement en BDD
    	$produit = new Produit();

    	// je renseigne les propriétés de mon objet Produit avec les valeurs récupérées du formulaire ($request)
    	$produit->titre = $request->titre;
    	$produit->reference = $request->reference;
    	$produit->prix = $request->prix;
    	$produit->quantite = $request->quantite;
    	$produit->description = $request->description;

    	// j'enregistre le produit en BDD
    	$produit->save();
    	// apres avoir aengirstré le produit dans la BDD, la variable $produit existe toujours et recupere l'ID du produit enregistré

    	// si j'ai une photo je la recupere et la met dans le dossier photos
    	if($request->hasFile('photo')) {

    	  // methode putFileAs()
    	  // 1er argument : le nom du dossier dans le disk virtuel
        // 2eme argument : le fichier photo
        // 3eme argument : le nom de la photo
        $nomPhoto = 'photo_' . $produit->id . '.'. $request->file('photo')->extension();
        // si le dossier n'existe pas, Laravel le creera pour nous
        $path = Storage::putFileAs(
          'photos', $request->file('photo'), $nomPhoto);

        // puis, je l'enregistre en base de données
        $produit->photo = $nomPhoto;
        $produit->update();
      }

    	// je fais une redirection vers la page liste des produits
    	return redirect()->route('produit.liste');


    }


    public function supprimerProduit($id){

      try{
        // je tente de trouver le produit que je veux supprimer
        $produitASupprimer = Produit::findOrFail($id);
      } catch(ModelNotFoundException $e) {
        // si je ne le trouve pas, je tombe dans une exception (fail)
        // je declenche un message flash error
        flash('Produit introuvable')->error();
        // je redirige vers la page liste des produits
        return redirect()->route('produit.liste');
      }

      // si le produit existe bien (n'est pas null)
      if(!is_null($produitASupprimer)) {
        $suppression = $produitASupprimer->delete();
        // si il y a bien eu suppression de produit
        if($suppression) {
          // si le fichier photo existe bien
          if(is_file(public_path('/stockage/photos/' . $produitASupprimer->photo))) {
            // je supprime la photo
            Storage::disk('public_perso')->delete('photos/' . $produitASupprimer->photo);
          }
          // message confirmant la suppression du produit
          flash('Produit '. $produitASupprimer->titre . ' supprimé avec succès')->success();
        } else {
          // s'il n'y a pas eu de suppression, message d'erreur
          flash('Erreur lors de la suppression du produit')->error();
        }
      }

      // redirection vers la liste des produits
      return redirect()->route('produit.liste');

    }


    public function formulaireModifierProduit($id){
      $data['action'] = 'modifier';
        try{
          $data['produitAmodifier'] = Produit::findOrFail($id);
        } catch(ModelNotFoundException $e) {
          flash('Produit introuvable')->error();
          return redirect()->route('produit.liste');
        }

        return view('formulaire_produit', $data);

    }

    public function modifierProduit($id, Request $request) {

      try{
        $produit = Produit::findOrFail($id);
      } catch(ModelNotFoundException $e) {
        flash('Produit introuvable')->error();
      return redirect()->route('produit.liste');
      }

      $produit->titre = $request->titre;
      $produit->reference = $request->reference;
      if($request->hasFile('photo')) {
        Storage::putFileAs('photos', $request->file('photo'), $request->photo);
      }
      $produit->photo = $request->photo;
      $produit->prix = $request->prix;
      $produit->description = $request->description;
      $produit->quantite = $request->quantite;

      $update = $produit->update();

      if($update) {
        flash('Produit '. $produit->titre . ' modifié avec succès')->success();
      }

      return redirect()->route('produit.liste');

    }

}

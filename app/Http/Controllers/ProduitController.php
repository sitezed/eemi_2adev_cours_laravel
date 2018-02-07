<?php

namespace Eemi\Http\Controllers;

use Eemi\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
	/* cette methode est appelée dans routes/web.php via l'url /liste_produits */
    public function listeProduits(){

    	// je recupere tous les produits
    	$data['produits'] = Produit::all();

    	// je les envois à la vue
    	return view('liste_produits', $data);
    }
}

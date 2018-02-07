<?php

namespace Eemi\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
	/* cette methode est appelée dans routes/web.php via l'url /liste_produits */
    public function listeProduits(){
    	return view('liste_produits');
    }
}

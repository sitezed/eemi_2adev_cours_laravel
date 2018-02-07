<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

/* creation de l'URL et appel via NomController@methodeDuController */
Route::get('/produits', 'ProduitController@listeProduits');


// je desire afficher le fichier /resources/views/exemple/affichage.blade.php
// url d'acces : http://localhost/ecommerce_l/public/affichage
/*
 Toutes les vues laravel prennent l'extension .blade.php et se trouvent dans le dossier resources/views
 * */
Route::get('/affichage_exemple', function () {
	return view('exemple.affichage');
});

// gestion d'une route avec Controller
Route::get('/exemple_controller', 'MonController@maMethode');



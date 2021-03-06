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
Route::get('/produits', 'ProduitController@listeProduits')->name('produit.liste');
Route::get('/formulaire_produit', 'ProduitController@formulaireProduit')->name('produit.nouveau');
Route::post('/formulaire_produit', 'ProduitController@enregistrerProduit')->name('produit.enregistrer');
Route::get('/produit/delete/{id}', 'ProduitController@supprimerProduit')->name('produit.suppression');
// route pour modifier un produit
Route::get('/produit/modifier/{id}', 'ProduitController@formulaireModifierProduit')->name('produit.modifier');
Route::post('/produit/modifier/{id}', 'ProduitController@modifierProduit');

Route::get('/articles', 'ArticleController@afficherArticles')->name('article.liste');
Route::get('/formulaire_article', 'ArticleController@formulaireArticle');
Route::post('/formulaire_article', 'ArticleController@enregistrerArticle')->name('article.enregistrer');


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



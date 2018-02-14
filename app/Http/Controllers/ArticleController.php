<?php

namespace Eemi\Http\Controllers;

use Eemi\Article;
use Eemi\Http\Requests\ArticleRequest;
use Eemi\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function afficherArticles(){
//    	$data['articles'] = Article::with('user', function($q){
//    	  $q->get(['name']);
//      })->get(['titre', 'resume', 'photo_principale', 'categorie' , 'created_at']);

      $data['articles'] = Article::with('user')->get();

    	return view('liste_articles', $data);
    }

    public function formulaireArticle() {

      $data['listeUsers'] = User::orderBy('name', 'ASC')->get();

      return view('formulaire_article', $data);

    }

    public function enregistrerArticle(ArticleRequest $request) {

      $article = new Article();

      $article->user_id = $request->utilisateur;
      $article->titre = $request->titre;
      $article->resume = $request->resume;
      $article->contenu = $request->contenu;
      $article->categorie = $request->categorie;

      $article->save();

      return redirect()->route('article.liste');

    }
}

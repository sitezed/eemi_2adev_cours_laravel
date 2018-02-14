<?php

namespace Eemi\Http\Controllers;

use Eemi\Article;
use Eemi\Http\Requests\ArticleRequest;
use Eemi\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function afficherArticles(){
    	$data['articles'] = Article::all();
    	return view('liste_articles', $data);
    }

    public function formulaireArticle(ArticleRequest $request) {

      $data['listeUsers'] = User::orderBy('name', 'ASC')->get();

      return view('formulaire_article', $data);

    }
}

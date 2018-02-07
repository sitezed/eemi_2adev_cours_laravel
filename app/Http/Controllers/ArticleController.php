<?php

namespace Eemi\Http\Controllers;

use Eemi\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function afficherArticles(){
    	$data['articles'] = Article::all();
    	return view('liste_articles', $data);
    }
}

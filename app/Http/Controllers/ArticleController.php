<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      $article = Article::all()->sortByDesc('created_at');
      return view('articles.index', ['article' => $article]);
    }
}
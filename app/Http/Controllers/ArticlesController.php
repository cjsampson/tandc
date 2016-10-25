<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function __construct()
    {

    }

    public function index(Article $article)
    {
        $keywords = $article->keywords()->first();
        dd($keywords);
        return view('sections.articles.index');
    }
}

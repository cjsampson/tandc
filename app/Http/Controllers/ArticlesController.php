<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Keyword;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function __construct()
    {

    }

    public function index(Article $article)
    {
        $newKeyword = Keyword::create(['name' => 'keyword 3']);
        $article = $article->find(1);
        $article->keywords()->attach($newKeyword->id);
        $article->keywords()->detach(1);
        $keywords = $article->keywords;
        $images = $article->images;
        dd($keywords);
        return view('sections.articles.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use App\Services\VideoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $articleService;
    private $videoService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArticleService $articleService, VideoService $videoService)
    {
        $this->articleService = $articleService;
        $this->videoService = $videoService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlesVideos = $this->articleService->articlesVideos();
        dd($articlesVideos);
        return view('home', compact('articlesVideos'));
    }

}

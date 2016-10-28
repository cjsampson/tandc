<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Keyword;
use App\Services\ArticleService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use League\Flysystem\Exception;

class ArticlesController extends Controller
{
    /**
     * @var ArticleService
     */
    private $articleService;

    /**
     * ArticlesController constructor.
     * @param ArticleService $articleService
     */
    public function __construct( ArticleService $articleService )
    {
        $this->articleService = $articleService;
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( Article $article )
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('sections.articles.create');
    }

    /**
     * @param ArticleCreateRequest $request
     */
    public function store( ArticleCreateRequest $request )
    {
        try {
            $this->articleService->create($request->all());
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit( Article $article )
    {
        return view('sections.articles.edit');
    }

    /**
     * @param $id
     * @param ArticleUpdateRequest $request
     */
    public function update( $id, ArticleUpdateRequest $request )
    {
        try {
            $this->articleService->update($request->all(), $id);
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }
    }


}

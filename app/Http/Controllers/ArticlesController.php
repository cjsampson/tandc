<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Services\ArticleService;
use App\Services\KeywordService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use League\Flysystem\Exception;
use Datatables;

class ArticlesController extends Controller
{
    /**
     * @var ArticleService
     */
    private $articleService;
    private $keywordService;

    /**
     * ArticlesController constructor.
     * @param ArticleService $articleService
     */
    public function __construct( ArticleService $articleService, KeywordService $keywordService)
    {
        $this->articleService = $articleService;
        $this->keywordService = $keywordService;
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $newKeyword = Keyword::create(['name' => 'keyword 3']);
        $article = Article::find(1);
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
        $keywords = $this->keywordService->all();
        return view('sections.articles.create', compact('keywords'));
    }

    /**
     * @param ArticleCreateRequest $request
     */
    public function store( ArticleCreateRequest $request )
    {
        try {
            dd($request->all());
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

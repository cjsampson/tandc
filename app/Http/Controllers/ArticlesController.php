<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Image;
use App\Models\Keyword;
use App\Services\ArticleService;
use App\Services\KeywordService;
use App\Services\ImageService;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Keyword;
use League\Flysystem\Exception;
use Datatables;

class ArticlesController extends Controller
{
    /**
     * @var ArticleService
     * @var KeywordService
     * @var ImageService
     */
    private $articleService;
    private $keywordService;
    private $imageService;

    /**
     * ArticlesController constructor.
     * @param ArticleService $articleService
     */
    public function __construct( ArticleService $articleService, KeywordService $keywordService, ImageService $imageService )
    {
        $this->articleService = $articleService;
        $this->keywordService = $keywordService;
        $this->imageService = $imageService;
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $newKeyword = Keyword::create(['name' => 'keyword 3']);
//        $article = Article::find(1);
//        $article->keywords()->attach($newKeyword->id);
//        $article->keywords()->detach(1);
//        $keywords = $article->keywords;
//        $images = $article->images;
//        dd($keywords);
        $articles = $this->articleService->all();

        return view('sections.articles.index', compact('articles'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show( $id )
    {
        $article = $this->articleService->find($id);

        return view('sections.articles.show', compact('article'));
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
            foreach ( $request->file('images') as $photo ) {
                $image = $this->imageService->storeAndCreate($photo);
                $images[] = $image->id;
            }

            $request['body'] = $this->articleService->imgReplace($images, $request->body);
            $request['image_id'] = $images;
            $article = $this->articleService->create($request->all());

            return redirect()->route('articles_show', $article->id);

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

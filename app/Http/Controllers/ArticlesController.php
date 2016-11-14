<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\ImageService;
use League\Flysystem\Exception;
use App\Services\KeywordService;
use App\Services\ArticleService;
use Illuminate\Database\QueryException;
use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;


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
     * @param KeywordService $keywordService
     * @param ImageService $imageService
     */
    public function __construct( ArticleService $articleService, KeywordService $keywordService, ImageService $imageService )
    {
        $this->articleService = $articleService;
        $this->keywordService = $keywordService;
        $this->imageService = $imageService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( ArticleCreateRequest $request )
    {
        try {
            foreach ( $request->file('images') as $photo ) {
                $image = $this->imageService->storeAndCreate($photo);
                $images[] = $image->id;
            }

            //store the needed $request files in $data without mutating the $request object
            $data = $request->except('cover_image', 'body');
            $data['cover_image'] = $this->articleService->coverImage($request->file('cover_image'));
            $data['images_id'] = $images;
            $data['body'] = $this->articleService->imgReplace($images, $request->input('body'));

            //creation of the article
            $article = $this->articleService->create($data);

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
    public function edit( $id )
    {
        $article = $this->articleService->find($id);
        $keywords = $this->keywordService->all();
        return view('sections.articles.edit', compact('article', 'keywords'));
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

        return redirect()->route('articles_show', $id);
    }


}

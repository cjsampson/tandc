<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Services\KeywordService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Psy\Exception\Exception;

class VideosController extends Controller
{

    /**
     * @var App\Services\VideoService
     * @var KeywordService
     */
    protected $videoService;
    protected $keywordService;

    /**
     * VideosController constructor.
     * @param KeywordService $keywordService
     * @param App\Services\VideoService $videoService
     */
    public function __construct( KeywordService $keywordService, App\Services\VideoService $videoService )
    {
        $this->videoService = $videoService;
        $this->keywordService = $keywordService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $videos = $this->videoService->all();

        return view('sections.videos.index', compact('videos'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show( $id )
    {
        $video = $this->videoService->find($id);

        return view('sections.videos.show', compact('video'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $keywords = $this->keywordService->all();

        return view('sections.videos.create', compact('keywords'));
    }

    /**
     * @param VideoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( VideoRequest $request )
    {
        try {
            $video = $this->videoService->create($request->all());

            return redirect()->route('video_show', $video->id);

        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit( $id )
    {
        $video = $this->videoService->find($id);
        $keywords = $this->keywordService->all();

        return view('sections.videos.edit', compact('video', 'keywords'));
    }

    /**
     * @param $id
     * @param VideoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( $id, VideoRequest $request )
    {
        try {
            $this->videoService->update($request->all(), $id);
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }

        return redirect()->route('video_show', $id);
    }
}

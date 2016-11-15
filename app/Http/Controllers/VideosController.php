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

    protected $videoService;
    protected $keywordService;

    public function __construct( KeywordService $keywordService, App\Services\VideoService $videoService )
    {
        $this->videoService = $videoService;
        $this->keywordService = $keywordService;
    }

    public function index()
    {
        $videos = $this->videoService->all();

        return view('sections.videos.index', compact('videos'));
    }

    public function show( $id )
    {
        $video = $this->videoService->find($id);

        return view('sections.videos.show', compact('video'));
    }

    public function create()
    {
        $keywords = $this->keywordService->all();

        return view('sections.videos.create', compact('keywords'));
    }

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

    public function edit( $id )
    {
        $video = $this->videoService->find($id);
        $keywords = $this->keywordService->all();

        return view('sections.videos.edit', compact('video', 'keywords'));
    }

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

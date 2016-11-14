<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;

class VideosController extends Controller
{
    protected $videoRepository;

    protected $videoService;

    public function __construct(){
        $this->videoRepository = App::make(\App\Repositories\VideoRepository::class);
        $this->videoService = App::make(\App\Services\VideoService::class);
    }

    public function index() 
    {
        return view('sections.videos.index', [
            'videos' => $this->videoRepository->all(),
        ]);
    }

    public function show($id){
        $video = [
            'video' => $this->videoRepository->find($id)
        ];

        return view('sections.videos.show', $video);
    }    

    public function store(Request $request)
    {   
        $this->videoRepository->create($request->all()); 
        dd($this->videoRepository->all());
    }    
}

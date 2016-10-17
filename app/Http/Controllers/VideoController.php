<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;

class VideoController extends Controller
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
}

<?php

namespace App\Services;

use App;


class VideoService{

    /**
     * @var VideoRepository
     */
    protected $videoRepository;

    
    public function __construct(){
        $this->videoRepository = App::make(\App\Repositories\VideoRepository::class);
    }
}
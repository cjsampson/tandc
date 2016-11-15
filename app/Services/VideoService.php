<?php

namespace App\Services;

use DB;
use App\Models\Image;
use App\Repositories\VideoRepository;


class VideoService{

    /**
     * @var VideoRepository
     */
    protected $videoRepository;

    
    public function __construct(VideoRepository $videoRepository){
        $this->videoRepository = $videoRepository;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create( Array $attributes )
    {
        // $article = DB::transaction(function () use ( $attributes ) {
        $video = $this->videoRepository->create($attributes);

        return $video;
    }
}
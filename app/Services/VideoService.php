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

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create( Array $attributes )
    {
        $article = DB::transaction(function () use ( $attributes ) {
            $article = $this->articleRepository->create($attributes);
        
            return $video;
        });

        return $video;
    }
}
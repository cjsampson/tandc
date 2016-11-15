<?php

namespace App\Services;

use DB;
use App\Models\Image;
use App\Repositories\VideoRepository;


class VideoService
{

    /**
     * @var VideoRepository
     */
    protected $videoRepository;


    /**
     * VideoService constructor.
     * @param VideoRepository $videoRepository
     */
    public function __construct( VideoRepository $videoRepository )
    {
        $this->videoRepository = $videoRepository;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->videoRepository->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find( $id )
    {
        return $this->videoRepository->find($id);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create( Array $attributes )
    {
        return DB::transaction(function () use ( $attributes ) {
            $video = $this->videoRepository->create($attributes);
            $video->keywords()->sync($attributes['keywords']);

            return $video;
        });

    }

    /**
     * @param array $attributes
     * @param $id
     */
    public function update( Array $attributes, $id )
    {
        DB::transaction(function () use ( $attributes, $id ) {
            $video = $this->videoRepository->update($attributes, $id);
            $video->keywords()->sync($attributes['keywords']);
        });
    }
}
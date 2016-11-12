<?php

namespace App\Services;

use DB;
use App\Repositories\ImageRepository;


class ImageService
{

    /**
     * @var ImageRepository
     */
    private $imageRepository;

    /**
     * ImageService constructor.
     * @param ImageRepository $imageRepository
     */
    public function __construct( ImageRepository $imageRepository )
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create( array $attributes )
    {
        return $this->imageRepository->create($attributes);
    }

    /**
     * @param $file
     * @return mixed
     */
    public function storePhoto( $file )
    {
        return $file->storeAs('public/images', uniqid('img_') . $file->getClientOriginalName());
    }

    /**
     * @param $path
     * @return string
     */
    public function getPath( $path )
    {
        $pathArray = explode('/', $path);

        return '/storage/images/' . $pathArray[2];
    }

    /**
     * @param $file
     * @return mixed
     */
    public function storeAndCreate( $file )
    {
        return DB::transaction(function () use ( $file ) {
            $path = $this->storePhoto($file);
            $publicPath = $this->getPath($path);

            return $this->create(['path' => $publicPath]);
        });
    }

}

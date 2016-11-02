<?php

namespace App\Services;

use App\Repositories\ImageRepository;
use DB;
use Mail;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ImageService
{

    private $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }
    public function create( array $attributes )
    {
        return $this->imageRepository->create($attributes);
    }

    public function storePhoto( $file)
    {
        return $file->storeAs('public/images/', uniqid('img_') . $file->getClientOriginalName());
    }

    /**
     * @param $file
     */
    public function storeAndCreate( $file )
    {
        return DB::transaction(function () use ($file){
            $path = $this->storePhoto($file);

            return $this->create(['path' => $path]);
        });


    }

}

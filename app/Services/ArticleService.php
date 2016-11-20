<?php

namespace App\Services;

use DB;
use App\Models\Image;
use App\Repositories\ArticleRepository;


class ArticleService
{

    /**
     * @var ArticleRepository
     */
    protected $articleRepository;

    /**
     * ArticleService constructor.
     * @param ArticleRepository $articleRepository
     */
    public function __construct( ArticleRepository $articleRepository )
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findBySlug( $title )
    {
        return $this->articleRepository->findBySlug($title);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create( Array $attributes )
    {
        return DB::transaction(function () use ( $attributes ) {
            $article = $this->articleRepository->create($attributes);
            $article->keywords()->sync($attributes['keywords']);
            if (isset($attributes['images_id'])){
                $article->images()->sync($attributes['images_id']);
            }

            return $article;
        });
    }

    /**
     * @param array $attributes
     * @param $id
     */
    public function update( Array $attributes, $id )
    {
        DB::transaction(function () use ( $attributes, $id ) {
            $article = $this->articleRepository->update($attributes, $id);
            $article->keywords()->sync($attributes['keywords']);
        });
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->articleRepository->all();
    }

    /**
     * @param array $images
     * @param $body
     * @return mixed
     */
    public function imgReplace( array $images, $body )
    {
        foreach ( $images as $key => $image ) {
            $path = Image::find($image)->path;
            $replacementNumber = $key + 1;
            $replacement = "{{img" . $replacementNumber . "}}";
            $result = str_replace($replacement, "{$path}", $body);
            $body = $result;
        }

        return $body;
    }

    /**
     * @param $image
     * @return string
     */
    public function coverImage( $image )
    {
        $path = $this->storeCoverImage($image);
        $pathArray = explode('/', $path);

        return '/storage/images/' . $pathArray[2];
    }

    /**
     * @param $image
     * @return mixed
     */
    public function storeCoverImage( $image )
    {
        return $image->storeAs('public/images', uniqid('cover_img_') . $image->getClientOriginalName());
    }

    /**
     * @param $id
     */
    public function delete( $id )
    {
        $this->articleRepository->delete($id);
    }

    public function slug($title)
    {
        $title = strtolower($title);
        return str_replace(' ', '-', $title);

    }
}

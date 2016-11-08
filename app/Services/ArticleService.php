<?php

namespace App\Services;

use App\Models\Image;
use DB;
use App;
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
     * @param array $attributes
     */
    public function create( Array $attributes )
    {
        $article = DB::transaction(function () use ( $attributes ) {
            $article = $this->articleRepository->create($attributes);
            $article->keywords()->sync($attributes['keywords']);
            $article->images()->sync($attributes['image_id']);

            return $article;
        });

        return $article;
    }

    /**
     * @param array $attributes
     * @param $id
     */
    public function update( Array $attributes, $id )
    {
        DB::transaction(function () use ( $attributes, $id ) {
            $this->articleRepository->update($attributes, $id);
        });
    }

    /**
     * @param array $images
     * @param $body
     * @return mixed
     */
    public function imgReplace( array $images, $body )
    {
        foreach ( $images as $key => $image ) {
            $test = Image::find($image)->path;
            $replacementNumber = $key + 1;
            $replacement = "{{img" . $replacementNumber . "}}";
            $result = str_replace($replacement, "{$test}", $body);
            $body = $result;
        }

        return $body;
    }
}

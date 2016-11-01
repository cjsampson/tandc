<?php

namespace App\Services;

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
        DB::transaction(function () use ( $attributes ) {
            $this->articleRepository->create($attributes);
        });
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
}

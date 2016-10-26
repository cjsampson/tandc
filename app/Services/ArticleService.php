<?php

namespace App\Services;

use App;
use App\Repositories\ArticleRepository;


class ArticleService
{

    /**
     * @var ArticleRepository
     */

    protected $ArticleRepository;

    public function __construct( ArticleRepository $articleRepository )
    {
    }
}

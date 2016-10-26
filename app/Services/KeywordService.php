<?php

namespace App\Services;

use App;
use App\Repositories\KeywordRepository;


class KeywordService
{

    /**
     * @var KeywordRepository
     */

    protected $keywordRepository;

    public function __construct( KeywordRepository $keywordRepository )
    {
        $this->keywordRepository = $keywordRepository;
    }
}

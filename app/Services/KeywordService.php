<?php

namespace App\Services;

use App;
use App\Repositories\KeywordRepository;
use DB;


class KeywordService
{

    /**
     * @var KeywordRepository
     */
    protected $keywordRepository;

    /**
     * KeywordService constructor.
     * @param KeywordRepository $keywordRepository
     */
    public function __construct( KeywordRepository $keywordRepository )
    {
        $this->keywordRepository = $keywordRepository;
    }

    /**
     * @param array $attributes
     */
    public function create( Array $attributes)
    {
        DB::transaction(function () use ($attributes){
            $this->keywordRepository->create($attributes);
        });
    }

    /**
     * @param array $attributes
     * @param $id
     */
    public function update( Array $attributes, $id)
    {
        DB::transaction(function () use ($attributes, $id){
            $this->keywordRepository->update($attributes, $id);
        });
    }
}

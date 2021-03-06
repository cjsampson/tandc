<?php

namespace App\Services;

use DB;
use App\Repositories\KeywordRepository;


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
//        $this->keywordRepository = App::make(\App\Repositories\KeywordRepositoryEloquent::class);
        $this->keywordRepository = $keywordRepository;
    }

    /**
     * @return mixed
     */
    public function dataTables()
    {
        return $this->keywordRepository->dataTables();
    }

    /**
     * @param array $attributes
     */
    public function create( Array $attributes )
    {
        DB::transaction(function () use ( $attributes ) {
            $this->keywordRepository->create($attributes);
        });
    }

    /**
     * @param array $attributes
     * @param $id
     */
    public function update( Array $attributes, $id )
    {
        DB::transaction(function () use ( $attributes, $id ) {
            $this->keywordRepository->update($attributes, $id);
        });
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find( $id )
    {
        return $this->keywordRepository->find($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->keywordRepository->all();
    }
}

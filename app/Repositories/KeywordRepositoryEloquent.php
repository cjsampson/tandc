<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\KeywordRepository;
use App\Models\Keyword;
use App\Validators\KeywordValidator;

/**
 * Class KeywordRepositoryEloquent
 * @package namespace App\Repositories;
 */
class KeywordRepositoryEloquent extends BaseRepository implements KeywordRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Keyword::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

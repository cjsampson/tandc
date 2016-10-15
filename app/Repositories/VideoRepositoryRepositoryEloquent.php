<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\VideoRepositoryRepository;
use App\Entities\VideoRepository;
use App\Validators\VideoRepositoryValidator;

/**
 * Class VideoRepositoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class VideoRepositoryRepositoryEloquent extends BaseRepository implements VideoRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return VideoRepository::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

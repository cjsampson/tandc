<?php

namespace App\Repositories;

use Datatables;
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

    public function dataTables()
    {
        $keywords = Keyword::select([
            'keywords.id',
            'keywords.name',
            'keywords.created_at',
        ]);

        return Datatables::of($keywords)
            ->addColumn('actions', '')
            ->editColumn('created_at', function ( $data ) {
                return $data->created_at->format('m/d/Y');
            })
            ->make(true);

    }
}

<?php

namespace App\Repositories;

use Datatables;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArticleRepository;
use App\Models\Article;
use App\Validators\ArticleValidator;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Article::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function findBySlug( $title )
    {
        return $this->model->where('slug', '=', $title)->first();
    }

    public function articlesVideos()
    {

        $articles = \DB::table('articles')->select([
            'name',
            'description',
            'author',
            'cover_image',
            'slug',
            'created_at',
            'updated_at',
        ])->get();
        foreach ($articles as $article){
            $article->type = 'article';
        }

        $videos = \DB::table('videos')->select([
            'title',
            'description',
            'author',
            'cover_image',
            'slug',
            'created_at',
            'updated_at',
        ])->get();
        foreach ($videos as $video){
            $video->type = 'video';
        }
        return $videos->merge($articles);
    }
}

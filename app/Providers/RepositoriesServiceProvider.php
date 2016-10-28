<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\VideoRepository', 'App\Repositories\VideoRepositoryEloquent');
        $this->app->bind('App\Repositories\ContactRepository', 'App\Repositories\ContactRepositoryEloquent');
        $this->app->bind('App\Repositories\ArticleRepository', 'App\Repositories\ArticleRepositoryEloquent');
        $this->app->bind('App\Repositories\ImageRepository', 'App\Repositories\ImageRepositoryEloquent');
        $this->app->bind('App\Repositories\KeywordRepository', 'App\Repositories\KeywordRepositoryEloquent');
    }
}
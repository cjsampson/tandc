<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Article::create([
            'name'        => 'Making laravel easy!',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/laravel.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'Tomas Leffew',
        ]);
        $article->keywords()->sync([1, 3, 5]);
        $article->images()->sync([1, 2, 3]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Learning React',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/react.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
        ]);
        $article->keywords()->sync([2, 4]);
        $article->images()->sync([1, 2, 4]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Mapping over arrays',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/jquery.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
        ]);
        $article->keywords()->sync([2, 5]);
        $article->images()->sync([1, 3, 4]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Setting href for a Button Tag',
            'description' => 'Here\'s a quick hack for dynamically setting a location property for a button tag',
            'cover_image' => '/images/javascript.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
        ]);
        $article->keywords()->sync([2, 5]);
        $article->images()->sync([1, 3, 4]);        
    }
}

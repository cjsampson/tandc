<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'title' => 'If Else & Comparison Operators',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'JavaScript',
//                'keywords' => 'JavaScript, Programming, Beginner, Web',
                'author' => 'Tomas Leffew',
                'cover_image' => 'basics.jpg',
                'url' => 'Gy87ZS5sb1w',
                'slug' => 'if-else-&-comparison-operators',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),

            ],
            [
                'title' => 'jQuery Event Binding',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'JavaScript',
//                'keywords' => 'Library, JavaScript, jQuery, Web, Beginner',
                'author' => 'CJ Sampson',
                'cover_image' => 'bright.jpg',                
                'url' => 'watch?v=G-POtu9J-m4&index=9&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv',
                'slug' => 'jquery-event-binding',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Object Literal Pattern',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'JavaScript',
//                'keywords' => 'JavaScript, Patterns, Web, Intermediate',
                'author' => 'Tomas Leffew',
                'cover_image' => 'middleware.jpg',
                'url' => 'watch?v=HkFlM73G-hk&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv&index=18',
                'slug' => 'object-literal-pattern',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Callbacks, Promises, Generators',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'JavaScript',
//                'keywords' => 'JavaScript, ES6, Intermediate',
                'author' => 'CJ Sampson',
                'cover_image' => 'jquery.png',
                'url' => 'watch?v=obaSQBBWZLk&index=25&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv',
                'slug' => 'callbacks,-promises-generators',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Introduction to PHP',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'PHP',
//                'keywords' => 'PHP, Backend, Programming, Beginner',
                'author' => 'Tomas Leffew',
                'cover_image' => 'green.png',                
                'url' => 'watch?v=27dR_sLaM74',
                'slug' => 'introduction-to-php',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'PHP Authentication: Setting Up',
                'description' => 'This is a simple description filler, dummy text for layout purposes',
//                'category' => 'PHP',
//                'keywords' => 'PHP, Programming, Intermediate, Backend',
                'author' => 'CJ Sampson',
                'cover_image' => 'laravel.png',                
                'url' => 'watch?v=B5tQoU5vMK0',
                'slug' => 'php-authentication:-setting-up',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'PHP Simple Routing System',
                'description' => 'This is a simple description filler, dummy text for layout purposes',                
//                'category' => 'PHP',
//                'keywords' => 'PHP, Backend, Intermediate, Web',
                'author' => 'Tomas Leffew',
                'cover_image' => 'middleware.jpg',                        
                'url' => 'watch?v=6reEBParHzQ',
                'slug' => 'php-simple-routing-system',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Intermediate OOP in PHP',
                'description' => 'This is a simple description filler, dummy text for layout purposes',                
//                'category' => 'PHP',
//                'keywords' => 'PHP, Backend, Web, Intermediate',
                'author' => 'CJ Sampson',
                'cover_image' => 'react.png',                
                'url' => 'watch?v=KHkk6Lf-_xQ',
                'slug' => 'intermediate oop in php',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Object Oriented Programming (OOP) for Beginners',
                'description' => 'This is a simple description filler, dummy text for layout purposes',                
//                'category' => 'PHP',
//                'keywords' => 'PHP, OOP, Intermediate',
                'author' => 'Tomas Leffew',
                'cover_image' => 'basics.jpg',                
                'url' => 'watch?v=w3XUG6oyINI',
                'slug' => 'object-oriented-programming-(oop)-for-beginners',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Composer & The Laravel Installer',
                'description' => 'This is a simple description filler, dummy text for layout purposes',                
//                'category' => 'PHP',
//                'keywords' => 'PHP, Backend, Programming, Beginner, Framework',
                'author' => 'CJ Sampson',
                'cover_image' => 'laravel.png',                
                'url' => 'watch?v=GVkVyUvupo8',
                'slug' => 'composer-&-the-laravel-installer',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ]
        ]);
    }
}

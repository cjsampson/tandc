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
                'category' => 'JavaScript',
                'keywords' => 'JavaScript, Programming, Beginner, Web', 
                'url' => 'watch?v=Gy87ZS5sb1w&index=2&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'jQuery Event Binding',
                'category' => 'JavaScript',
                'keywords' => 'Library, JavaScript, jQuery, Web, Beginner',
                'url' => 'watch?v=G-POtu9J-m4&index=9&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Object Literal Pattern',
                'category' => 'JavaScript',
                'keywords' => 'JavaScript, Patterns, Web, Intermediate', 
                'url' => 'watch?v=HkFlM73G-hk&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv&index=18',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Callbacks, Promises, Generators',
                'category' => 'JavaScript',
                'keywords' => 'JavaScript, ES6, Intermediate',
                'url' => 'watch?v=obaSQBBWZLk&index=25&list=PLoYCgNOIyGACnrXwo5HMCfOH9VT05znGv',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Introduction to PHP',
                'category' => 'PHP',
                'keywords' => 'PHP, Backend, Programming, Beginner',
                'url' => 'watch?v=27dR_sLaM74',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'PHP Authentication: Setting Up',
                'category' => 'PHP',
                'keywords' => 'PHP, Programming, Intermediate, Backend', 
                'url' => 'watch?v=B5tQoU5vMK0',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'PHP Simple Routing System',
                'category' => 'PHP',
                'keywords' => 'PHP, Backend, Intermediate, Web',
                'url' => 'watch?v=6reEBParHzQ',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Intermediate OOP in PHP',
                'category' => 'PHP',
                'keywords' => 'PHP, Backend, Web, Intermediate', 
                'url' => 'watch?v=KHkk6Lf-_xQ',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Object Oriented Programming (OOP) for Beginners',
                'category' => 'PHP',
                'keywords' => 'PHP, OOP, Intermediate',
                'url' => 'watch?v=w3XUG6oyINI',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Composer & The Laravel Installer',
                'category' => 'PHP',
                'keywords' => 'PHP, Backend, Programming, Beginner, Framework',
                'url' => 'watch?v=GVkVyUvupo8',
                'updated_at' => new \DateTime(),
                'created_at' => new \DateTime(),
            ]
        ]);
    }
}

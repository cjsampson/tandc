<?php

use App\Models\Keyword;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $keywords = [
        'js',
        'react',
        'php',
        'html',
        'css',
    ];

    /**
     * Takes the $keywords array and adds each one to the database;
     */
    public function run()
    {
        foreach ($this->keywords as $keyword){
            Keyword::create(['name' => $keyword]);
        }
    }
}

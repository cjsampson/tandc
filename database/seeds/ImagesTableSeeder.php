<?php

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $imagePath = [
        '/images/basics.jpg',
        '/images/bright.jpg',
        '/images/middleware.jpg',
        '/images/jquery.png',
        '/images/green.png',
        '/images/homestead.jpg',
    ];
    public function run()
    {
        foreach($this->imagePath as $path){
            Image::create(['path' => $path]);
        }
    }
}

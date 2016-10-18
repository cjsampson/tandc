<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'articles'], function () {
    Route::match(['get', 'post'], '/', [
        'as'   => 'articles_index',
        'uses' => 'ArticlesController@index',
    ]);
});

Route::get('contact', [
    'uses' => 'ContactController@index',
    'as'   => 'contact_index',
]);

Route::get('videos', [
    'uses' => 'VideoController@index',
    'as'   => 'videos_index',
]);


<?php
Route::group(['prefix' => 'videos'], function (){
    Route::get('/', [
        'uses' => 'VideosController@index',
        'as'   => 'videos_index',
    ]);
    Route::get('/show/{id}', [
        'uses' => 'VideosController@show',
        'as'   => 'video_show',
    ]);    

});

<?php
Route::group(['prefix' => 'videos'], function (){
    Route::get('/', [
        'uses' => 'VideosController@index',
        'as'   => 'videos_index',
    ]);

});

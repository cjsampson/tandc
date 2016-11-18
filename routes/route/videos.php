<?php
Route::group(['prefix' => 'videos'], function (){
    Route::match(['get','post'],'/', [
        'uses' => 'VideosController@index',
        'as'   => 'videos_index',
    ]);
    Route::get('/show/{id}', [
        'uses' => 'VideosController@show',
        'as'   => 'video_show'
    ]);

    Route::group(['middleware' => ['auth', 'admin']], function (){
        Route::get('/create', [
            'uses' => 'VideosController@create',
            'as'   => 'video_create',
        ]);
        Route::post('/store', [
            'uses' => 'VideosController@store',
            'as'   => 'video_store',
        ]);
        Route::get('/edit/{id}', [
            'uses' => 'VideosController@edit',
            'as'   => 'video_edit',
        ]);
        Route::post('/update/{id}', [
            'uses' => 'VideosController@update',
            'as'   => 'video_update',
        ]);
        Route::delete('/destroy/{id}', [
            'uses' => 'VideosController@destroy',
            'as'   => 'video_destroy',
        ]);
    });
});

<?php
Route::group(['prefix' => 'videos'], function (){
    Route::match(['get','post'],'/', [
        'uses' => 'VideosController@index',
        'as'   => 'videos_index',
    ]);
    Route::get('/show/{id}', [
        'uses' => 'VideosController@show',
        'as'   => 'video_show',
    ]);

    Route::group(['middleware' => ['auth', 'admin']], function (){
        Route::get('/create', [
            'uses' => 'KeywordsController@create',
            'as'   => 'settings_keywords_create',
        ]);
        Route::post('/store', [
            'uses' => 'VideosController@store',
            'as'   => 'video_store',
        ]);
        Route::get('/edit/{id}', [
            'uses' => 'KeywordsController@edit',
            'as'   => 'settings_keywords_edit',
        ]);
        Route::post('/update/{id}', [
            'uses' => 'KeywordsController@update',
            'as'   => 'settings_keywords_update',
        ]);
        Route::delete('/destroy/{id}', [
            'uses' => 'KeywordsController@destroy',
            'as'   => 'settings_keywords_destroy',
        ]);
    });
});

<?php
Route::group(['prefix' => 'articles'], function () {
    Route::get('/create', [
        'uses' => 'ArticlesController@create',
        'as'   => 'articles_create',
    ]);
    Route::post('/store', [
        'uses' => 'ArticlesController@store',
        'as'   => 'articles_store',
    ]);
    Route::get('/edit/{id}', [
        'uses' => 'ArticlesController@edit',
        'as'   => 'articles_edit',
    ]);
    Route::post('/update/{id}', [
        'uses' => 'ArticlesController@update',
        'as'   => 'articles_update',
    ]);
    Route::delete('/destroy/{id}', [
        'uses' => 'ArticlesController@destroy',
        'as'   => 'articles_destroy',
    ]);
});
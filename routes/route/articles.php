<?php
Route::group(['prefix' => 'articles'], function () {
    Route::match(['get', 'post'], '/', [
        'as'   => 'articles_index',
        'uses' => 'ArticlesController@index',
    ]);
    Route::get('/create', [
        'as'   => 'articles_create',
        'uses' => 'ArticlesController@create',
    ]);
    Route::post('/store', [
        'as'   => 'articles_store',
        'uses' => 'ArticlesController@store',
    ]);
    Route::get('/show/{id}', [
        'as'   => 'articles_show',
        'uses' => 'ArticlesController@show',
    ]);
});

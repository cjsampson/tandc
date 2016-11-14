<?php
Route::group(['prefix' => 'articles'], function () {
    Route::get('/create', [
        'as'   => 'articles_create',
        'uses' => 'ArticlesController@create',
    ]);
    Route::post('/store', [
        'as'   => 'articles_store',
        'uses' => 'ArticlesController@store',
    ]);
});
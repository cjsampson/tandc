<?php
Route::group(['prefix' => 'articles'], function () {
    Route::match(['get', 'post'], '/', [
        'as'   => 'articles_index',
        'uses' => 'ArticlesController@index',
    ]);
    Route::get('/show/{id}', [
        'as'   => 'articles_show',
        'uses' => 'ArticlesController@show',
    ]);
});

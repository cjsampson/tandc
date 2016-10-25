<?php
Route::group(['prefix' => 'articles'], function () {
    Route::match(['get', 'post'], '/', [
        'as'   => 'articles_index',
        'uses' => 'ArticlesController@index',
    ]);
});

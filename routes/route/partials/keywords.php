<?php
Route::group(['prefix' => 'keywords'], function () {
    Route::get('/', [
        'uses' => 'KeywordsController@index',
        'as'   => 'settings_keywords_index',
    ]);
    Route::get('/create', [
        'uses' => 'KeywordsController@create',
        'as'   => 'settings_keywords_create',
    ]);
    Route::post('/store', [
        'uses' => 'KeywordsController@store',
        'as'   => 'settings_keywords_store',
    ]);
    Route::post('/update/{id}', [
        'uses' => 'KeywordsController@update',
        'as'   => 'settings_keywords_update',
    ]);
    Route::get('/edit/{id}', [
        'uses' => 'KeywordsController@edit',
        'as'   => 'settings_keywords_edit',
    ]);
    Route::delete('/destroy/{id}', [
        'uses' => 'KeywordsController@destroy',
        'as'   => 'settings_keywords_destroy',
    ]);
});

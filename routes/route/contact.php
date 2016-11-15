<?php
Route::group(['prefix' => 'contact'], function () {
    Route::match(['get', 'post'], '/', [
        'uses' => 'ContactController@index',
        'as'   => 'contact_index',
    ]);

    Route::post('store', [
        'uses' => 'ContactController@store',
        'as'   => 'contact_store',
    ]);
});

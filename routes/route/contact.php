<?php
Route::group(['prefix' => 'contact'], function () {
    Route::match(['get', 'post'], '/', [
        'uses' => 'ContactsController@index',
        'as'   => 'contact_index',
    ]);

    Route::post('store', [
        'uses' => 'ContactsController@store',
        'as'   => 'contact_store',
    ]);
});

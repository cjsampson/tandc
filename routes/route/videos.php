<?php
Route::group(['prefix' => 'videos'], function (){
    Route::get('/', [
        'uses' => 'VideoController@index',
        'as'   => 'videos_index',
    ]);

});

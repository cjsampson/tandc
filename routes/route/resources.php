<?php
Route::get('resources', [
    'uses' => 'ResourcesController@index',
    'as'   => 'resources_index',
]);
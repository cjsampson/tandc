<?php
Route::group(['prefix' => 'dashboard'], function () {
    require 'dashboard/keywords.php';
    Route::get('/videos', function() {
        return view('sections.videos.index');
    });
    // require 'dashboard/videos.php';
//    require 'dashboard/articles.php';
});

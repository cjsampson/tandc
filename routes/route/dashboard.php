<?php
Route::group(['prefix' => 'dashboard'], function () {
    require 'dashboard/keywords.php';
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/videos', function() {
        return view('sections.videos.index');
    });
    // require 'dashboard/videos.php';
//    require 'dashboard/articles.php';
});

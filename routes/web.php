<?php
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

/*
 * creates a function called _include if one doesn't exist to include our given route.
 */
if ( ! function_exists('_include') ) {
    function _include( $partial )
    {
        $file = __DIR__ . "/route/{$partial}.php";
        /*
         * file = "/home/vagrant/projects/tandc.dev/routes/route/{$partial}.php"
         */
        if ( ! file_exists($file) ) {
            throw new FileNotFoundException("Route partial [{$partial}] not found.");
        }
        require_once $file;
    }
}

/*
 * define all route folder names here
 */
$routes = [
    'articles',
    'contact',
    'videos',
    'dashboard',
];

/*
 * does a foreach though our routes and calls the method _include with the route name
 */
foreach ( $routes as $route ) {
    _include($route);
}

/*
 * generates the route
 */
function _include( $partial )
{
    $file = __DIR__ . "/route/{$partial}.php";
    if ( ! file_exists($file) ) {
        throw new FileNotFoundException("Route partial [{$partial}] not found.");
    }
    require_once $file;
}

/*
 * homepage
 */
Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home',
]);


Route::get('/practice', function () {
    return view('practice');
});


Auth::routes();
Route::get('/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as'   => 'logout',
]);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resources', function () {
    return view('resources');
});

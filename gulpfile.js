const elixir = require('laravel-elixir');

// require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });
let node = 'node_modules/',
    assets = 'public/assets/',
    js = `${assets}js/`,
    css = `${assets}css/`,
    fonts = `public/fonts/`;

elixir(function (mix) {
    //datatables
    mix.copy(`${node}datatables.net/js/jquery.dataTables.js`, `${js}dataTables`);
    mix.copy(`${node}datatables.net-dt/css/jquery.dataTables.css`, `${css}dataTables`);
    mix.copy(`${node}datatables.net-bs/css/dataTables.bootstrap.css`, `${css}dataTables`);
    mix.copy(`${node}datatables.net-bs/js/dataTables.bootstrap.js`, `${js}dataTables`);
    //jquery
    mix.copy(`${node}jquery/dist/jquery.min.js`, `${js}jquery`);
    //font-awesome
    mix.copy(`${node}font-awesome/css/font-awesome.min.css`, `${css}font-awesome`);
    mix.copy(`${node}font-awesome/fonts`, `${fonts}`);


});

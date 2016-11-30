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
    //jQuery
    mix.copy(`${node}jquery/dist/jquery.min.js`, `${js}jquery`);
    //font-awesome
    mix.copy(`${node}font-awesome/css/font-awesome.min.css`, `${css}font-awesome`);
    mix.copy(`${node}font-awesome/fonts`, `${fonts}`);
    // highlight.js
    mix.copy(`${node}highlightjs/styles/solarized_light.css`, `${css}highlightjs/styles`);
    mix.copy(`${node}highlightjs/styles/tomorrow.css`, `${css}highlightjs/styles`);
    mix.copy(`${node}highlightjs/highlight.pack.min.js`, `${js}highlightjs/`);
    // bulma.css
    mix.copy(`${node}bulma/css/bulma.css`, `${css}bulma/css`);
    mix.copy(`${node}bulma/css/bulma.css.map`, `${css}bulma/css`);
    //jQuery unslider
    mix.copy(`${node}jquery-unslider/dist/js/unslider-min.js`, `${js}unslider`);
});

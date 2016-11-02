<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @param $data
         * The collection of $data to be looped over
         * @param null $name
         * The name attribute of the html
         * @param null $id
         * The id attribute of the html
         * @param null $class
         * The class attribute of the html
         * @return string
         */
        Form::macro(
            'multiSelect', function ( $data, $name, $id = null, $class = null ) {
            $html = "<select multiple='multiple'"
                . "name='{$name}[]'"
                . (isset($id) ? "id='{$id}'" : '')
                . (isset($class) ? "class='{$class}'" : '')
                . '>';
            foreach ( $data as $item ) {
                $html .= "<option value=$item->id> {$item->name} </option>";
            }
            $html .= '</select>';

            return $html;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

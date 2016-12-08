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
         * @param null $keywords
         * The current $keywords a object has
         * @return string
         */
        Form::macro(
            'multiSelect', function ( $data, $name, $id = null, $class = null, $keywords = null ) {
            $html = "<select multiple='multiple'"
                . "name='{$name}[]'"
                . ( isset( $id ) ? "id='{$id}'" : '' )
                . ( isset( $class ) ? "class='{$class}'" : '' )
                . '>';
            //if $keywords then have those keywords selected
            if ( $keywords ) {
                foreach ( $data as $key => $item ) {
                    $pass = false;
                    for ( $x = 0; $x < count($keywords); $x++ ) {
                        if ( $item->name == $keywords[$x]->name ) {
                            $pass = true;
                            $html .= "<option value=$item->id selected='selected'> {$item->name} </option>";
                        }
                    }
                    if ( ! $pass ) {
                        $html .= "<option value=$item->id > {$item->name} </option>";
                    }
                }

            } else {
                foreach ( $data as $item ) {
                    $html .= "<option value=$item->id> {$item->name} </option>";
                }
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

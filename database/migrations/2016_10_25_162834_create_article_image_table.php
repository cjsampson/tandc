<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_image', function ( Blueprint $table ) {
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')
                ->references('id')
                ->on('articles');

            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')
                ->references('id')
                ->on('images');

            $table->primary(['article_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_image');
    }
}

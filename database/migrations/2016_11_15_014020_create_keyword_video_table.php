<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_video', function ( Blueprint $table ) {
            $table->integer('keyword_id')->unsigned();
            $table->foreign('keyword_id')
                ->references('id')
                ->on('keywords')
                ->onDelete('cascade');

            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')
                ->references('id')
                ->on('videos')
                ->onDelete('cascade');

            $table->primary(['keyword_id', 'video_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keyword_video');
    }
}

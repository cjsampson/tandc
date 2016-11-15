<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
            $table->increments('id');
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('cover_image')->nullable();
			$table->string('author')->nullable();
//			$table->string('category')->nullable();
//			$table->string('keywords')->nullable();
			$table->string('url')->nullable();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('videos');
	}

}

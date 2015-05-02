<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_threads', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('channel');
            $table->string('title');
            $table->text('content');
            $table->integer('replies');
            $table->string('created_by');
            $table->string('updated_by');
			$table->timestamps();

            $table->foreign('id')
                  ->references('forum_threads_id')
                  ->on('forum_replies')
                  ->onDelete('cascade');
		});

        Schema::create('forum_replies', function(Blueprint $table){
            $table->increments('id');
            $table->integer('forum_threads_id');
            $table->text('content');
            $table->string('created_by');
            $table->timestamps();
        });

        Schema::create('forum_channels', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
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
        Schema::drop('forum_threads');
        Schema::drop('forum_replies');
        Schema::drop('forum_channels');
	}

}

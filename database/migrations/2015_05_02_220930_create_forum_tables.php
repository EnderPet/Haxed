<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumTables extends Migration {

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
            $table->string('title');
            $table->text('content');
            $table->integer('replies');
            $table->integer('created_by');
            $table->integer('updated_by');
			$table->timestamps();
		});

        Schema::create('forum_replies', function(Blueprint $table){
            $table->increments('id');
            $table->integer('forum_threads_id');
            $table->text('content');
            $table->integer('created_by');
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
	}

}

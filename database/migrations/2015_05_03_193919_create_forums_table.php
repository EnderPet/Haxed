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
            $table->increments('id')->unsigned();
            $table->integer('channel');
            $table->string('title');
            $table->text('content');
            $table->integer('replies');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });

        Schema::create('forum_replies', function(Blueprint $table){
            $table->increments('id');
            $table->integer('forum_threads_id')->unsigned();
            $table->text('content');
            $table->string('created_by');
            $table->timestamps();
        });

        Schema::create('forum_channels', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('forum_replies', function(Blueprint $table){
            $table->foreign('forum_threads_id')->references('id')->on('forum_threads')->onDelete('cascade');
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
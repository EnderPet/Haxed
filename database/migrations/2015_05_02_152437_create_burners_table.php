<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//

class CreateBurnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('burners', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('max_capacity');
            $table->string('price');
            $table->string('level_requirement');
            $table->integer('premium');
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
		Schema::drop('burners');
	}

}

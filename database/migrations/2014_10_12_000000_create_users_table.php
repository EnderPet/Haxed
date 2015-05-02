<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 35);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->string('exp')->default('0');
            $table->string('max_exp')->default('55');
            $table->string('money')->default('55000');
            $table->string('yeast')->default('15');
            $table->string('sugar')->default('20');
            $table->string('coal')->default('20');
            $table->string('mash')->default('15');
            $table->string('alcohol')->default('15');
            $table->string('rank');
            $table->string('level')->default('1');
            $table->integer('burner_id')->default('0');
            $table->integer('warehouse_id')->default('0');
            $table->integer('weapon_id')->default('0');
            $table->integer('armor_id')->default('0');
            $table->integer('gang_id')->default('0');
            $table->integer('amulet_id')->default('0');
            $table->integer('premium_1')->default('0');
            $table->integer('premium_2')->default('0');
            $table->integer('distillery_1')->default('0');
            $table->integer('distillery_2')->default('0');
            $table->integer('distillery_3')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
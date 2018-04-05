<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('activity', function (Blueprint $table) {
    		$table->increments('id');
    		$table->integer('user_id')->unsigned();
    		$table->foreign('user_id')->references('id')->on('users')
    		->onDelete('restrict')
    		->onUpdate('restrict');
    		$table->string('title');
    		$table->string('content');
    		$table->string('hour');
    		$table->string('place');
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
    	//Schema::drop('activity');
    }
}
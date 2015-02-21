<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSustSeatPlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sust_seat_plan', function($table)
		{
		$table->increments('id');
		$table->string('loc', 100);
		$table->string('block', 100);
		$table->string('room', 100);
		$table->integer('seat')->unsigned();
		$table->integer('start')->unsigned();
		$table->integer('end')->unsigned();
		$table->string('unit', 5);
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
		Schema::drop('sust_seat_plan');
	}

}

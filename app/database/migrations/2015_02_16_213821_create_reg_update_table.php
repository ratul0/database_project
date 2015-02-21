<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegUpdateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reg_update', function($table)
		{
		$table->increments('id');
		$table->integer('A1')->unsigned();
		$table->integer('B1')->unsigned();
		$table->integer('B2')->unsigned();
		$table->integer('B3')->unsigned();
		$table->integer('B4')->unsigned();
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
		Schema::drop('reg_update');
	}

}

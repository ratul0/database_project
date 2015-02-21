<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEligibleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eligible', function($table)
		{
		$table->increments('id');
		$table->integer('hsc_roll')->unsigned();
		$table->string('hsc_board', 20);
		$table->integer('hsc_pass_year')->unsigned();
		$table->string('university', 10);
		$table->string('unitkeyword', 5);
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
		Schema::drop('eligible');
	}

}

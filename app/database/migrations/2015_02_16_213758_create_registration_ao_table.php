<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationAoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registration_ao', function($table)
		{
		$table->increments('id');
		$table->integer('code')->unsigned();
		$table->string('name', 100);
		$table->string('fname', 100);
		$table->string('mname', 100);
		$table->string('contact', 25);
		$table->string('o_roll', 15);
		$table->string('o_gpa', 10);
		$table->integer('o_year')->unsigned();
		$table->string('o_board', 10);
		$table->string('o_group', 30);
		$table->text('o_result');
		$table->string('a_roll', 15);
		$table->string('a_gpa', 10);
		$table->integer('a_year')->unsigned();
		$table->string('a_board', 10);
		$table->string('a_group', 30);
		$table->text('a_result');
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
		Schema::drop('registration_ao');
	}

}

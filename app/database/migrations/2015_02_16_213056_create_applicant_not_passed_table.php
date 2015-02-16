<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantNotPassedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_not_passed', function($table)
		{
		$table->increments('id');
		$table->integer('new_exam_roll')->unsigned();
		$table->string('punit', 2);
		$table->string('name', 100);
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
		Schema::drop('applicant_not_passed');
	}

}

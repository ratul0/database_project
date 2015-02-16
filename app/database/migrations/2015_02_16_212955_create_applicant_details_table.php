<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_details', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->string('exam_unit', 5);
		$table->string('full_name', 300);
		$table->string('father_name', 300);
		$table->string('mother_name', 300);
		$table->string('sex', 50);
		$table->string('dob', 50);
		$table->string('contact', 50);
		$table->string('msisdn', 50);
		$table->string('sms_time', 100);
		$table->string('hsc_board', 50);
		$table->string('hsc_roll', 50);
		$table->string('hsc_regno', 50);
		$table->string('hsc_session', 50);
		$table->string('hsc_year', 50);
		$table->string('hsc_gpa', 50);
		$table->string('hsc_ltrgd', 400);
		$table->string('hsc_group', 50);
		$table->string('hsc_type', 50);
		$table->string('hsc_institute', 100);
		$table->string('ssc_board', 50);
		$table->string('ssc_roll', 50);
		$table->string('ssc_regno', 50);
		$table->string('ssc_session', 50);
		$table->string('ssc_year', 50);
		$table->string('ssc_gpa', 50);
		$table->string('ssc_ltrgd', 400);
		$table->string('ssc_group', 50);
		$table->string('ssc_type', 50);
		$table->string('ssc_institute', 200);
		$table->string('status', 10);
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
		Schema::drop('applicant_details');
	}

}

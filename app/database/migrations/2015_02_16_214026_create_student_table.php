<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function($table)
		{
		$table->increments('id');
		$table->string('name', 100);
		$table->string('fname', 100);
		$table->string('mname', 100);
		$table->string('hsc_roll_no', 20);
		$table->string('hsc_regno', 20);
		$table->string('hsc_session', 20);
		$table->string('hsc_pass_year', 10);
		$table->string('hsc_gpa', 20);
		$table->string('hsc_board_name', 30);
		$table->string('hsc_stud_group', 40);
		$table->string('hsc_stud_type', 35);
		$table->string('hsc_ltrgd', 200);
		$table->string('hsc_stud_sex', 20);
		$table->string('ssc_roll_no', 20);
		$table->string('ssc_regno', 20);
		$table->string('ssc_session', 20);
		$table->string('ssc_pass_year', 20);
		$table->string('ssc_gpa', 20);
		$table->string('ssc_board_name', 30);
		$table->string('ssc_stud_group', 35);
		$table->string('ssc_stud_type', 35);
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
		Schema::drop('student');
	}

}

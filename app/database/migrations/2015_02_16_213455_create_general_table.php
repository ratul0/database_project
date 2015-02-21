<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('general', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->string('merit_list', 45);
		$table->float('ssc_gpa');
		$table->float('hsc_gpa');
		$table->float('total_weighted_gpa');
		$table->float('exam_score');
		$table->float('total_score');
		$table->integer('merit_position')->unsigned();
		$table->tinyInteger('quoF');
		$table->tinyInteger('quoT');
		$table->tinyInteger('quoD');
		$table->string('hsc_type', 50);
		$table->string('hsc_group', 50);
		$table->string('hsc_board', 50);
		$table->string('hsc_ltrgrd', 400);
		$table->string('eligible_dept', 400);
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
		Schema::drop('general');
	}

}

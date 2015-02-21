<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSustResultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sust_result', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->string('exam_unit', 10);
		$table->string('quota_type', 25);
		$table->string('group', 25);
		$table->string('merit_list', 10);
		$table->double('total_score');
		$table->integer('serial')->unsigned();
		$table->string('rank_type', 10);
		$table->integer('rank')->unsigned();
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
		Schema::drop('sust_result');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('score', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->string('unit', 5);
		$table->string('sub_name', 10);
		$table->integer('correct')->unsigned();
		$table->integer('incorrect')->unsigned();
		$table->float('score');
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
		Schema::drop('score');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertVerifyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cert_verify', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->tinyInteger('quoF');
		$table->tinyInteger('quoD');
		$table->tinyInteger('quoI');
		$table->string('commentF', 250);
		$table->string('commentD', 250);
		$table->string('commentI', 250);
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
		Schema::drop('cert_verify');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertUploadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cert_upload', function($table)
		{
		$table->increments('id');
		$table->integer('exam_roll')->unsigned();
		$table->integer('count')->unsigned();
		$table->string('type', 20);
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
		Schema::drop('cert_upload');
	}

}

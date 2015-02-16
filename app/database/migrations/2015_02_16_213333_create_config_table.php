<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('config', function($table)
		{
		$table->increments('id');
		$table->string('key', 64);
		$table->text('value');
		$table->text('options');
		$table->string('title', 64);
		$table->string('description', 64);
		$table->enum('type', array('Textbox', 'Textarea','Selectbox','Boolean'))->default('Textarea');
		$table->integer('sort')->unsigned();
		$table->enum('visible', array('Yes', 'No'))->default('Yes');
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
		Schema::drop('config');
	}

}

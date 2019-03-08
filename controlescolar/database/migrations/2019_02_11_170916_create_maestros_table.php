<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaestrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maestros', function(Blueprint $table)
		{
			$table->string('cvemae', 10)->primary('maestros_pkey');
			$table->string('nombre', 100)->nullable();
			$table->integer('noempleado')->nullable();
			$table->string('email', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('maestros');
	}

}

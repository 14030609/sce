<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materias', function(Blueprint $table)
		{
			$table->string('cvemat', 10)->primary('materias_pkey');
			$table->string('nombre', 100)->nullable();
			$table->integer('creditos')->nullable();
			$table->integer('horasprofesor')->nullable();
			$table->integer('horasautonomo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materias');
	}

}

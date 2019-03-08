<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalleresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talleres', function(Blueprint $table)
		{
			$table->string('cvetaller', 4)->primary('talleres_pkey');
			$table->string('nombre', 100)->nullable();
			$table->string('instructur', 100)->nullable();
			$table->string('horario', 100)->nullable();
			$table->string('lugar', 100)->nullable();
			$table->integer('cupo')->nullable();
			$table->text('requisitos')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talleres');
	}

}

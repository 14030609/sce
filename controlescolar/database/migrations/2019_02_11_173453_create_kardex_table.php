<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKardexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kardex', function(Blueprint $table)
		{
			$table->string('cvemat', 10);
			$table->string('nua', 100);
			$table->integer('oportunidad');
			$table->decimal('calificacion', 10, 0)->nullable();
			$table->primary(['cvemat','nua','oportunidad'], 'kardex_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kardex');
	}

}

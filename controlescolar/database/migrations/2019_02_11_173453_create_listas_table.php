<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('listas', function(Blueprint $table)
		{
			$table->string('cvemat', 10);
			$table->string('nogpo', 4);
			$table->string('nua', 100);
			$table->primary(['cvemat','nogpo','nua'], 'listas_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('listas');
	}

}

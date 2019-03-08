<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReticulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reticula', function(Blueprint $table)
		{
			$table->string('cveesp', 4);
			$table->string('cvemat', 10);
			$table->primary(['cveesp','cvemat'], 'reticula_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reticula');
	}

}

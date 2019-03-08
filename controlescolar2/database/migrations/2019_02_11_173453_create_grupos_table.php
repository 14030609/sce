<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->string('cvemat', 10);
			$table->string('nogpo', 4);
			$table->string('cvemae', 4)->nullable();
			$table->time('horainicia')->nullable();
			$table->time('horatermina')->nullable();
			$table->string('salon', 4)->nullable();
			$table->primary(['cvemat','nogpo'], 'grupos_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupos');
	}

}

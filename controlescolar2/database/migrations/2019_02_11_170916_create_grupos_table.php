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
			$table->string('nogpo', 2);
			$table->string('cvemae', 4);
			$table->time('horainicio')->nullable();
			$table->time('fechafinaliza')->nullable();
			$table->string('salon', 2)->nullable();
			$table->primary(['cvemat','nogpo','cvemae'], 'grupos_pkey');
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

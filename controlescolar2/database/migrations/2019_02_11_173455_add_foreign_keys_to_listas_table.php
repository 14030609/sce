<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToListasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('listas', function(Blueprint $table)
		{
			$table->foreign('nua', 'listas_nua_fkey')->references('nua')->on('alumnos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cvemat', 'listas_cvemat_fkey')->references('cvemat')->on('grupos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('listas', function(Blueprint $table)
		{
			$table->dropForeign('listas_nua_fkey');
			$table->dropForeign('listas_cvemat_fkey');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKardexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kardex', function(Blueprint $table)
		{
			$table->foreign('nua', 'kardex_nua_fkey')->references('nua')->on('alumnos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('oportunidad', 'kardex_oportunidad_fkey')->references('oportunidad')->on('oportunidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cvemat', 'kardex_cvemat_fkey')->references('cvemat')->on('materias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kardex', function(Blueprint $table)
		{
			$table->dropForeign('kardex_nua_fkey');
			$table->dropForeign('kardex_oportunidad_fkey');
			$table->dropForeign('kardex_cvemat_fkey');
		});
	}

}

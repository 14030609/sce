<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReticulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reticula', function(Blueprint $table)
		{
			$table->foreign('cveesp', 'reticula_cveeso_fkey')->references('cveesp')->on('especialidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cvemat', 'reticula_cvemat_fkey')->references('cvemat')->on('materias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reticula', function(Blueprint $table)
		{
			$table->dropForeign('reticula_cveeso_fkey');
			$table->dropForeign('reticula_cvemat_fkey');
		});
	}

}

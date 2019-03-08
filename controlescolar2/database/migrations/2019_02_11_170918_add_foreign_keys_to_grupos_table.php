<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupos', function(Blueprint $table)
		{
			$table->foreign('cvemae', 'grupos_cvemae_fkey')->references('cvemae')->on('maestros')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cvemat', 'grupos_cvemat_fkey')->references('cvemat')->on('materias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupos', function(Blueprint $table)
		{
			$table->dropForeign('grupos_cvemae_fkey');
			$table->dropForeign('grupos_cvemat_fkey');
		});
	}

}

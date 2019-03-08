<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInscripciontallerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inscripciontaller', function(Blueprint $table)
		{
			$table->foreign('cvetaller', 'inscrpciontaller_cvetaller_fkey')->references('cvetaller')->on('talleres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nua', 'inscrpciontaller_nua_fkey')->references('nua')->on('alumnos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inscripciontaller', function(Blueprint $table)
		{
			$table->dropForeign('inscrpciontaller_cvetaller_fkey');
			$table->dropForeign('inscrpciontaller_nua_fkey');
		});
	}

}

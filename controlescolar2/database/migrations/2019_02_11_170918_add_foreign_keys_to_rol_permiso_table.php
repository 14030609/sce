<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolPermisoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rol_permiso', function(Blueprint $table)
		{
			$table->foreign('id_rol', 'rol_permiso_id_rol_fkey')->references('id_rol')->on('rol')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_permiso', 'rol_permiso_id_permiso_fkey')->references('id_permiso')->on('permisos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rol_permiso', function(Blueprint $table)
		{
			$table->dropForeign('rol_permiso_id_rol_fkey');
			$table->dropForeign('rol_permiso_id_permiso_fkey');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios_rol', function(Blueprint $table)
		{
			$table->foreign('email', 'usuarios_rol_email_fkey')->references('email')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_rol', 'usuarios_rol_id_rol_fkey')->references('id_rol')->on('rol')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios_rol', function(Blueprint $table)
		{
			$table->dropForeign('usuarios_rol_email_fkey');
			$table->dropForeign('usuarios_rol_id_rol_fkey');
		});
	}

}

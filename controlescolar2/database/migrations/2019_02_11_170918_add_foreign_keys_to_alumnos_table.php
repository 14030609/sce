<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alumnos', function(Blueprint $table)
		{
			$table->foreign('cveesp', 'alumnos_cveesp_fkey')->references('cveesp')->on('especialidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('email', 'alumnos_email_fkey')->references('email')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alumnos', function(Blueprint $table)
		{
			$table->dropForeign('alumnos_cveesp_fkey');
			$table->dropForeign('alumnos_email_fkey');
		});
	}

}

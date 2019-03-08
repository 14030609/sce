<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaestrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('maestros', function(Blueprint $table)
		{
			$table->foreign('email', 'maestros_email_fkey')->references('email')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('maestros', function(Blueprint $table)
		{
			$table->dropForeign('maestros_email_fkey');
		});
	}

}

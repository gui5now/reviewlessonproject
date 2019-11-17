<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'fk_Admin_pessoa1')->references('id')->on('pessoa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->dropForeign('fk_Admin_pessoa1');
		});
	}

}

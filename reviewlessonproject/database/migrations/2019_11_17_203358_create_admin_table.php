<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('idAdmin')->primary();
			$table->string('Nome', 45);
			$table->integer('pessoa_id');
			$table->integer('pessoa_endereco_id');
			$table->index(['pessoa_id','pessoa_endereco_id'], 'fk_Admin_pessoa1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}

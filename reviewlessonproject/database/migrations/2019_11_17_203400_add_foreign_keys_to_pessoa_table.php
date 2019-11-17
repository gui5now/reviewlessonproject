<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->foreign('endereco_id', 'fk_pessoa_endereco1')->references('id')->on('endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->dropForeign('fk_pessoa_endereco1');
		});
	}

}

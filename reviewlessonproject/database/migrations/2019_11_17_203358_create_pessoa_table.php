<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nome');
			$table->string('email', 45);
			$table->integer('telefone')->nullable();
			$table->string('usuario', 45);
			$table->string('senha', 45);
			$table->string('sexo', 45);
			$table->integer('cpf');
			$table->integer('endereco_id')->index('fk_pessoa_endereco1_idx');
			$table->primary(['id','endereco_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa');
	}

}

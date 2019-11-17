<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('rua', 45);
			$table->integer('numero');
			$table->string('complemento', 45)->nullable();
			$table->string('bairro', 45);
			$table->string('cidade', 45);
			$table->string('estado', 45);
			$table->string('pais', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco');
	}

}

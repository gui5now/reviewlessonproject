<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrinhocompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinhocompra', function(Blueprint $table)
		{
			$table->integer('idCarrinho')->primary();
			$table->integer('quantidade');
			$table->integer('descricaoProdutdo')->nullable();
			$table->string('formaPagamento', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carrinhocompra');
	}

}

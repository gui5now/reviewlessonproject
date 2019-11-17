<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSituacaopagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('situacaopagamento', function(Blueprint $table)
		{
			$table->integer('codSitucacao')->primary();
			$table->string('situacao', 45)->nullable();
			$table->integer('transacaoAprovada_idTransacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('situacaopagamento');
	}

}

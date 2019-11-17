<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrinhocompraHasSituacaopagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinhocompra_has_situacaopagamento', function(Blueprint $table)
		{
			$table->integer('carrinhoCompra_idCarrinho')->index('fk_carrinhoCompra_has_situacaoPagamento_carrinhoCompra1_idx');
			$table->integer('situacaoPagamento_codSitucacao')->index('fk_carrinhoCompra_has_situacaoPagamento_situacaoPagamento1_idx');
			$table->primary(['carrinhoCompra_idCarrinho','situacaoPagamento_codSitucacao']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carrinhocompra_has_situacaopagamento');
	}

}

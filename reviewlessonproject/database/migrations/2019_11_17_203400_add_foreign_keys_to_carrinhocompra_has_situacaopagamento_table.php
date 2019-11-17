<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarrinhocompraHasSituacaopagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carrinhocompra_has_situacaopagamento', function(Blueprint $table)
		{
			$table->foreign('carrinhoCompra_idCarrinho', 'fk_carrinhoCompra_has_situacaoPagamento_carrinhoCompra1')->references('idCarrinho')->on('carrinhocompra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('situacaoPagamento_codSitucacao', 'fk_carrinhoCompra_has_situacaoPagamento_situacaoPagamento1')->references('codSitucacao')->on('situacaopagamento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carrinhocompra_has_situacaopagamento', function(Blueprint $table)
		{
			$table->dropForeign('fk_carrinhoCompra_has_situacaoPagamento_carrinhoCompra1');
			$table->dropForeign('fk_carrinhoCompra_has_situacaoPagamento_situacaoPagamento1');
		});
	}

}

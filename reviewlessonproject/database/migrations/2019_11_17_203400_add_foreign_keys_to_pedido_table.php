<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPedidoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pedido', function(Blueprint $table)
		{
			$table->foreign('aluno_idAluno', 'fk_pedido_aluno1')->references('matricula_Aluno')->on('aluno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('carrinhoCompra_idCarrinho', 'fk_pedido_has_produto_carrinhoCompra1')->references('idCarrinho')->on('carrinhocompra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pedido', function(Blueprint $table)
		{
			$table->dropForeign('fk_pedido_aluno1');
			$table->dropForeign('fk_pedido_has_produto_carrinhoCompra1');
		});
	}

}

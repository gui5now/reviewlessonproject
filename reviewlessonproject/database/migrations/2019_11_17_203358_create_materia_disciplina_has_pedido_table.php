<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriaDisciplinaHasPedidoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materia_disciplina_has_pedido', function(Blueprint $table)
		{
			$table->integer('materia_disciplina_idDisciplina')->index('fk_materia_disciplina_has_pedido_materia_disciplina1_idx');
			$table->integer('pedido_pedido_idPedido');
			$table->integer('pedido_produto_idProduto');
			$table->integer('pedido_carrinhoCompra_idCarrinho');
			$table->index(['pedido_pedido_idPedido','pedido_produto_idProduto','pedido_carrinhoCompra_idCarrinho'], 'fk_materia_disciplina_has_pedido_pedido1_idx');
			$table->index(['pedido_pedido_idPedido','pedido_carrinhoCompra_idCarrinho'], 'fk_materia_disciplina_has_pedido_pedido1');
			$table->primary(['materia_disciplina_idDisciplina','pedido_pedido_idPedido','pedido_produto_idProduto','pedido_carrinhoCompra_idCarrinho']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materia_disciplina_has_pedido');
	}

}

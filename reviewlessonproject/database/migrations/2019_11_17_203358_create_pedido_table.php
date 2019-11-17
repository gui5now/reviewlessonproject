<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedido', function(Blueprint $table)
		{
			$table->integer('pedido_idPedido');
			$table->integer('carrinhoCompra_idCarrinho')->index('fk_pedido_has_produto_carrinhoCompra1_idx');
			$table->integer('aluno_idAluno')->index('fk_pedido_aluno1_idx');
			$table->decimal('preco', 10, 0)->nullable();
			$table->integer('quantidade')->nullable();
			$table->string('nome', 45)->nullable();
			$table->primary(['pedido_idPedido','carrinhoCompra_idCarrinho','aluno_idAluno']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedido');
	}

}

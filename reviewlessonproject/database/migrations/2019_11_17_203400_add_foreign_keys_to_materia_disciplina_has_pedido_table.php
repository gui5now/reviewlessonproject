<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMateriaDisciplinaHasPedidoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('materia_disciplina_has_pedido', function(Blueprint $table)
		{
			$table->foreign('materia_disciplina_idDisciplina', 'fk_materia_disciplina_has_pedido_materia_disciplina1')->references('idDisciplina')->on('materia_disciplina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pedido_pedido_idPedido', 'fk_materia_disciplina_has_pedido_pedido1')->references('pedido_idPedido')->on('pedido')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('materia_disciplina_has_pedido', function(Blueprint $table)
		{
			$table->dropForeign('fk_materia_disciplina_has_pedido_materia_disciplina1');
			$table->dropForeign('fk_materia_disciplina_has_pedido_pedido1');
		});
	}

}

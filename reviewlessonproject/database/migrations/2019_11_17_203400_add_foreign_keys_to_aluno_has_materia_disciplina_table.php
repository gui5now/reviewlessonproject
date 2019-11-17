<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlunoHasMateriaDisciplinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aluno_has_materia_disciplina', function(Blueprint $table)
		{
			$table->foreign('aluno_idAluno', 'fk_aluno_has_materia_disciplina_aluno1')->references('matricula_Aluno')->on('aluno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('materia_disciplina_idDisciplina', 'fk_aluno_has_materia_disciplina_materia_disciplina1')->references('idDisciplina')->on('materia_disciplina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aluno_has_materia_disciplina', function(Blueprint $table)
		{
			$table->dropForeign('fk_aluno_has_materia_disciplina_aluno1');
			$table->dropForeign('fk_aluno_has_materia_disciplina_materia_disciplina1');
		});
	}

}

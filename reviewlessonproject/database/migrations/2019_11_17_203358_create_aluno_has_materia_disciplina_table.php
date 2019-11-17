<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunoHasMateriaDisciplinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aluno_has_materia_disciplina', function(Blueprint $table)
		{
			$table->integer('aluno_idAluno')->index('fk_aluno_has_materia_disciplina_aluno1_idx');
			$table->integer('materia_disciplina_idDisciplina')->index('fk_aluno_has_materia_disciplina_materia_disciplina1_idx');
			$table->primary(['aluno_idAluno','materia_disciplina_idDisciplina']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aluno_has_materia_disciplina');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriaDisciplinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materia_disciplina', function(Blueprint $table)
		{
			$table->integer('idDisciplina')->primary();
			$table->string('nomeDisciplina')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materia_disciplina');
	}

}

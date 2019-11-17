<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendaprofessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agendaprofessor', function(Blueprint $table)
		{
			$table->date('abrirAgenda');
			$table->date('resgatarAgendaDia')->nullable();
			$table->date('resgatarAgenda5Dias')->nullable();
			$table->date('resgatarAgendaSemana')->nullable();
			$table->integer('professor_idProfessor')->index('fk_agendaProfessor_professor1_idx');
			$table->primary(['abrirAgenda','professor_idProfessor']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agendaprofessor');
	}

}

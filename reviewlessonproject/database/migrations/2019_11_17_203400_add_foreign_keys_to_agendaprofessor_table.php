<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgendaprofessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agendaprofessor', function(Blueprint $table)
		{
			$table->foreign('professor_idProfessor', 'fk_agendaProfessor_professor1')->references('idProfessor')->on('professor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agendaprofessor', function(Blueprint $table)
		{
			$table->dropForeign('fk_agendaProfessor_professor1');
		});
	}

}

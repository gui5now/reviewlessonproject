<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professor', function(Blueprint $table)
		{
			$table->integer('idProfessor')->primary();
			$table->string('graduacao', 45)->nullable();
			$table->integer('pessoa_id');
			$table->integer('pessoa_endereco_id');
			$table->index(['pessoa_id','pessoa_endereco_id'], 'fk_professor_pessoa1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professor');
	}

}

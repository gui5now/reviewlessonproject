<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('professor', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'fk_professor_pessoa1')->references('id')->on('pessoa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('professor', function(Blueprint $table)
		{
			$table->dropForeign('fk_professor_pessoa1');
		});
	}

}

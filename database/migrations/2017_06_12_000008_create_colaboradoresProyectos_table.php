<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColaboradoresProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colaboradoresProyectos', function(Blueprint $table)
		{	
			$table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');

			$table->integer('colaborador_id')->unsigned();
            $table->foreign('colaborador_id')->references('id')->on('colaboradores')->onDelete('cascade');

			$table->primary(['proyecto_id','colaborador_id']);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colaboradoresProyectos');
	}

}

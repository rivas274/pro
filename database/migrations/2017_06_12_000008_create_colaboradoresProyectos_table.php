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
			$table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('id')->on('proyectos')->onDelete('cascade');

			$table->integer('idColaborador')->unsigned();
            $table->foreign('idColaborador')->references('id')->on('colaboradores')->onDelete('cascade');

			$table->primary(['idProyecto','idColaborador']);
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

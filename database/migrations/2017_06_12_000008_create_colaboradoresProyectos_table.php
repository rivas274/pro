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
			$table->integer('id_proyectos')->unsigned();
            $table->foreign('id_proyectos')->references('id')->on('proyectos')->onDelete('cascade');

			$table->integer('id_colaboradores')->unsigned();
            $table->foreign('id_colaboradores')->references('id')->on('colaboradores')->onDelete('cascade');

			$table->primary(['id_proyectos','id_colaboradores']);
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

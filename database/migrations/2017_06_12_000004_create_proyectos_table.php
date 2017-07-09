<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('descripcion', 65535);
			$table->float('cauntia', 10, 0);
			$table->date('fechaInicio');
			$table->date('fechaFin')->nullable();
			$table->integer('id_clientes')->unsigned();
            $table->foreign('id_clientes')->references('id')->on('clientes')->onDelete('cascade');
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
		Schema::drop('proyectos');
	}

}

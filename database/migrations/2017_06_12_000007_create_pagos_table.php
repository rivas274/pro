<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('concepto');
			$table->float('monto', 10, 2);
			$table->date('fechaPago');

			$table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('id')->on('proyectos');

			$table->integer('idColaborador')->unsigned();
            $table->foreign('idColaborador')->references('id')->on('colaboradores');

			$table->integer('idTipoPago')->unsigned();
            $table->foreign('idTipoPago')->references('id')->on('colaboradores');

			$table->index(['idProyecto','idColaborador']);
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
		Schema::drop('pagos');
	}

}

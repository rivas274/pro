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

			$table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos');

			$table->integer('colaborador_id')->unsigned();
            $table->foreign('colaborador_id')->references('id')->on('colaboradores');

			$table->integer('tipoPago_id')->unsigned();
            $table->foreign('tipoPago_id')->references('id')->on('tiposPagos');

			$table->index(['proyecto_id','colaborador_id']);
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

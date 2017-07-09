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

			$table->integer('id_proyectos')->unsigned();
            $table->foreign('id_proyectos')->references('id')->on('proyectos');

			$table->integer('id_colaboradores')->unsigned();
            $table->foreign('id_colaboradores')->references('id')->on('colaboradores');

			$table->integer('id_tiposPagos')->unsigned();
            $table->foreign('id_tiposPagos')->references('id')->on('tiposPagos');

			$table->index(['id_proyectos','id_colaboradores']);
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

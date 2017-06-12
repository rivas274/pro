<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColaboradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colaboradores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 45);
			$table->string('domicilio', 256);
			$table->string('telefono', 15);
			$table->string('cuenta', 25);

			$table->integer('idBanco')->unsigned();
            $table->foreign('idBanco')->references('id')->on('bancos');

			$table->integer('idRazonSocial')->unsigned();
            $table->foreign('idRazonSocial')->references('id')->on('razonesSociales');

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
		Schema::drop('colaboradores');
	}

}

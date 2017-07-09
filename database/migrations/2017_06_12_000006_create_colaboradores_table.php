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

			$table->integer('banco_id')->unsigned();
            $table->foreign('banco_id')->references('id')->on('bancos');

			$table->integer('RazonSocial_id')->unsigned();
            $table->foreign('RazonSocial_id')->references('id')->on('razonesSociales');

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

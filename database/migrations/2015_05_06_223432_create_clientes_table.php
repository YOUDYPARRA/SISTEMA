<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',100)->unique();
			$table->string('calle',100);
			$table->string('numero',100);
			$table->string('colonia',100);
			$table->string('poblacion',100);
			$table->string('codigo_postal',100);
			$table->string('estado',100);
			$table->string('nombre_contacto',100);
			$table->string('telefono',100);
			$table->string('correo',100);
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
		Schema::drop('clientes');
	}

}

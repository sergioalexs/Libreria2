<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('autor');
			$table->string('editorial');
			$table->integer('paginas');
			$table->integer('anyo');
			$table->integer('precio');
			$table->string('portada');
			$table->timestamps();

			$table->integer('categoria_id')->unsigned();
			$table->foreign('categoria_id')->references('id')->on('categorias');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('libros');
	}

}

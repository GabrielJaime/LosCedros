<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conceptos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('codigo');
			$table->string('detalle');
			$table->string('retencion', 1);
			$table->string('familia', 1);
			$table->string('haberdebe', 1);
			$table->string('sumaresta', 1);
			$table->string('for', 1);
			$table->decimal('importe',17,4);
			$table->decimal('porcentaje',5,2);
			$table->string('por_sobre', 1);
			$table->string('esfijo', 1);
			$table->string('imp_por', 1);
			$table->string('retencion1', 1);
			$table->string('basico', 1);
			$table->string('con_carga', 1);
			$table->string('es_formula', 1);
			$table->string('quefor', 1)->nullable();
			$table->integer('ero1');
			$table->string('manual', 1);
			$table->string('HBLF', 1);
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
		Schema::drop('conceptos');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->increments('id'); //legajo
            $table->string('nombre');
            $table->string('photo');
            $table->integer('cuil');
            $table->date('fecha_ingreso');
            $table->integer('categoria'); //Especialidad
            $table->integer('subcategoria');
            $table->string('sexo',1);
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('fecha_nacimiento');
            $table->string('matricula')->nullable();
            $table->string('direccion');
            $table->string('localidad');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('estado_civil',1);
            $table->integer('cant_hijos');
            $table->integer('cant_hijos_disc'); //hijosI
            $table->integer('hijos_escpres');
            $table->integer('hijos_escprim');
            $table->integer('hijos_escsec');
            $table->integer('hijos_univer');
            $table->string('sindicato',1); // =fatsa
            $table->string('nro_cuenta')->nullable();
            $table->string('fatsa',1); // =sindicato
            $table->integer('nro_afiliado')->nullable();
            $table->string('conyugue',1);
            $table->string('tiene_a_cargo',1);
            $table->integer('cant_a_cargo');
            $table->string('tipo_contrato');
            $table->string('turno');
            $table->string('jubilacion');
            $table->string('afjp')->nullable();
            $table->decimal('basico', 17, 4);
            $table->string('ubicacion');
            $table->string('obra_social');
            $table->integer('horas');
            $table->string('caja_cirujia');
            $table->string('caja_partos');
            $table->boolean('activo');
            $table->string('estado');

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
        Schema::drop('employees');
    }
}

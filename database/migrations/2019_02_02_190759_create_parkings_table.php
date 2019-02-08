<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unisigned();

            $table->date('fecha');
            $table->enum('deudas', ['SI', 'NO'])->default('NO');
            $table->enum('vehiculo', ['CARRO', 'MOTO']);
            $table->enum('discapacidad', ['SI', 'NO'])->default('NO');
            $table->enum('asignado', ['SI', 'NO']);
            $table->enum('tipo', ['PROPIETARIO', 'ARRIENDATARIO']);

            $table->string('nombre_propietario');
            $table->string('telefono_propietario');
            $table->string('direccion_propietario');
            $table->string('email_propietario');

            $table->string('nombre_residente');
            $table->string('telefono_residente');
            $table->string('direccion_residente');
            $table->string('email_residente');
            $table->integer('torre');
            $table->integer('apartamento');

            $table->string('placa');
            $table->string('color');
            $table->string('clase');
            $table->string('marca');
            $table->string('modelo');

            $table->enum('status', ['PENDING', 'APPROVED'])->default('PENDING');

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
        Schema::dropIfExists('parkings');
    }
}

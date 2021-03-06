<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censuses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->integer('torre');
            $table->integer('apartamento');
            $table->string('telefono_apto');
            $table->enum('tipo', ['PROPIETARIO', 'ARRENDATARIO']);
            $table->string('nombre_propietario');
            $table->string('email_propietario');
            $table->string('telefono_propietario');
            $table->string('nombre_residente');
            $table->string('email_residente');
            $table->integer('time_days');
            $table->integer('time_months');
            $table->integer('time_years');

            $table->enum('carro', ['SI', 'NO'])->default('NO');
            $table->string('placa_carro')->nullable();
            $table->string('modelo_carro')->nullable();
            $table->integer('parqueadero_asign_carro')->nullable();

            $table->enum('moto', ['SI', 'NO'])->default('NO');
            $table->string('placa_moto')->nullable();
            $table->string('modelo_moto')->nullable();
            $table->integer('parqueadero_asign_moto')->nullable();

            $table->enum('bicicleta', ['SI', 'NO'])->default('NO');
            $table->string('gancho')->nullable();

            for ($i = 1; $i <= 10; $i++) {
                $table->string('residente'.$i)->nullable();
                $table->enum('discapacitado'.$i, ['SI', 'NO'])->default('NO');
                $table->integer('edad'.$i)->nullable();
                $table->string('parentesco'.$i)->nullable();
                $table->string('actividad'.$i)->nullable();
                $table->string('celular'.$i)->nullable();
            }

            $table->enum('internet', ['SI', 'NO'])->default('NO');
            $table->string('proveedor')->nullable();

            $table->enum('mascota', ['SI', 'NO'])->default('NO');
            $table->string('mascota_raza')->nullable();
            $table->integer('mascota_cantidad')->nullable();
            $table->enum('vacunas', ['SI', 'NO'])->default('NO')->nullable();

            $table->mediumText('observaciones')->nullable();

            $table->string('elaborado');
            $table->date('fecha');
            $table->enum('status', ['PENDING', 'SAVED'])->default('PENDING');

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
        Schema::dropIfExists('censuses');
    }
}

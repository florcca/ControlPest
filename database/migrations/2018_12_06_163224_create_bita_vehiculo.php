<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitaVehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bita_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Fecha');
            $table->integer('kiloinicial');
            $table->integer('kilofin');
            $table->integer('litros');
            $table->integer('importe');
            $table->string('nota');
            $table->string('observaciones');
            $table->integer('id_vehiculo')->unsigned();
            $table->foreign('id_vehiculo')->references('id')->on('nuevo_vehiculos');

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
        Schema::dropIfExists('bita_vehiculos');
    }
}
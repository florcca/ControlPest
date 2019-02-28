<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevoVehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevo_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Marca',50);
            $table->string('Modelo',30);
            $table->string('Num_serie',50);
            $table->string('Chofer');
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
        Schema::dropIfExists('nuevo_vehiculos');
    }
}
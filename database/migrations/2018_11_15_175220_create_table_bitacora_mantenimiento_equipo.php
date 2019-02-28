<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBitacoraMantenimientoEquipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_mantenimiento_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TipoEquipo',50);
            $table->string('NoUnidad',20);
            $table->string('CambioEmpaques',50);
            $table->string('Lubricacion',50);
            $table->string('CambioBoquillas',50);
            $table->date('Fecha');
            $table->string('Observaciones',200);
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
        Schema::dropIfExists('bitacora_mantenimiento_equipos');
    }
}

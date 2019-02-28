<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBitacoraControlQuimicosAlmacen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('bitacora_control_quimicos_almacens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreComercial',50);
            $table->string('NoRegistroUnico',20);
            $table->string('NombreIngredienteActivo',50);
            $table->string('FechaEmision');
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
        Schema::dropIfExists('bitacora_control_quimicos_almacens');
    }
}

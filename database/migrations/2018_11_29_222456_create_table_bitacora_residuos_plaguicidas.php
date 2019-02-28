<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTableBitacoraResiduosPlaguicidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('bitacora_residuos_plaguicidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Fecha',50);
            $table->string('NoProducto',20);
            $table->string('CantidadDesechos',50);
            $table->string('DestinoFinal',50);
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
        Schema::dropIfExists('bitacora_residuos_plaguicidas');
    }
}

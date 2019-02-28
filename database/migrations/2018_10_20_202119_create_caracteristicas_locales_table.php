<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_locals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_habitado');
            $table->integer('casa_gardin');
            $table->integer('material_paredes');
            $table->integer('tipo_de_engarre');
            $table->integer('tipo_tuberias');
            $table->integer('Electrodomesticos');
            $table->string('otros',50);
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
        Schema::dropIfExists('caracteristica_locals');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',75);
            $table->string('domicilio',50);
            $table->string('ciudad',70);
            $table->string('telefono',11);
            $table->string('lugar_de_aplicacion',70);
            $table->string('responsable',75);
            $table->string('fecha');
            $table->integer('id_tipo_plaga')->unsigned();
            $table->integer('id_giro_establecimiento')->unsigned();
            $table->integer('id_caracteristicas_locales')->unsigned();
            $table->integer('id_informacion')->unsigned();

            $table->foreign('id_tipo_plaga')->references('id')->on('tipo_de_plagas');
            $table->foreign('id_giro_establecimiento')->references('id')->on('giro_establecimientos');
            $table->foreign('id_caracteristicas_locales')->references('id')->on('caracteristica_locals');
            $table->foreign('id_informacion')->references('id')->on('informacions');
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
        Schema::dropIfExists('hoja_servicios');
    }
}

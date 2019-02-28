<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuimicosAUtilizarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quimico_a_utilizars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',5);
            $table->string('dosis',20);
            $table->integer('cantidad');
            $table->integer('id_hoja_servicio')->unsigned();
            $table->foreign('id_hoja_servicio')->references('id')->on('hoja_servicios');
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
        Schema::dropIfExists('quimico_a_utilizars');
    }
}

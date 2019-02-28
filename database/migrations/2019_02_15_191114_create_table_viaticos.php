<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableViaticos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaticos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruta');
            $table->string('tecnico');
            $table->string('fecha');
            $table->integer('fondo');
            $table->integer('comida');
            $table->integer('gasolina');
            $table->integer('hotel');
            $table->integer('extra');
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
        Schema::dropIfExists('viaticos');
    }
}

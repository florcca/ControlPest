<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDePlagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_de_plagas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ptz1');
            $table->integer('ptz2');
            $table->integer('ptz3');
            $table->integer('ptz4');
            $table->integer('ptz5');
            $table->integer('ptz6');
            $table->integer('ptz7');
            $table->integer('ptz8');
            $table->integer('ptz9');
            $table->integer('ptz10');
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
        Schema::dropIfExists('tipo_de_plagas');
    }
}

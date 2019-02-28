<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiroEstablecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giro_establecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('casa_abitacion');
            $table->integer('restaurante');
            $table->integer('abarrotes');
            $table->integer('bodega');
            $table->integer('carniceria');
            $table->integer('consutorio');
            $table->integer('otroscheck');
            $table->string('otrosstring');
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
        Schema::dropIfExists('giro_establecimientos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCertificadoVehicular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado_vehiculars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('empresa');
            $table->string('tipo_v');
            $table->string('placas');
            $table->string('giro_v');
            $table->string('tipo_quimico_aplicado');
            $table->string('fecha_fumigacion');
            $table->string('fecha_vencimiento');
            $table->string('tecnico_responsable');
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
        Schema::dropIfExists('certificado_vehiculars');
    }
}

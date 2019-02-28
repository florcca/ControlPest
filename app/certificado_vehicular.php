<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificado_vehicular extends Model
{
    protected $fillable = [
      'nombre',
      'domicilio',
      'ciudad',
      'empresa',
      'tipo_v',
      'placas',
      'giro_v',
      'tipo_quimico_aplicado',
      'fecha_fumigacion',
      'fecha_vencimiento',
      'tecnico_responsable'

    ];
}

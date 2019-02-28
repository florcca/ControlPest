<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{
      protected $fillable = [
    'fecha_de_aplicacion',
    'fecha_proximo_servicio',
    'In_preaplicacion',
    'In_posaplicacion'
  ];
}

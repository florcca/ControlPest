<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoja_servicio extends Model
{
      protected $fillable = [
    'nombre',
    'domicilio',
    'ciudad',
    'telefono',
    'lugar_de_aplicacion',
    'responsable',
    'fecha'
  ];
}

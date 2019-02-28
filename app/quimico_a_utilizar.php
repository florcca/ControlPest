<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quimico_a_utilizar extends Model
{
  protected $fillable = [
    'codigo',
    'dosis',
    'cantidad',
    'id_hoja_servicio'
];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracteristica_local extends Model
{
    //
    protected $fillable = [
      'no_habitado',
      'casa_gardin',
      'material_paredes',
      'tipo_de_engarre',
      'tipo_tuberias',
      'Electrodomesticos',
      'otros'

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giro_establecimiento extends Model
{
    //
    protected $fillable = [

      'casa_abitacion',
      'restaurante',
      'abarrotes',
      'bodega',
      'carniceria',
      'consutorio',
      'otroscheck',
      'otrosstring'
    ];
}

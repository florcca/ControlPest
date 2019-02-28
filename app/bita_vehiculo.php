<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bita_vehiculo extends Model
{
   protected $fillable =[
   	'Fecha',
   	'kiloinicial',
   	'kilofin',
   	'litros',
   	'importe',
   	'nota',
   	'observaciones',
   	'id_vehiculo'
   ];
}

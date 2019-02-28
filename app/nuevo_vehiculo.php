<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nuevo_vehiculo extends Model
{
        	 protected $fillable = [
        	 	'Marca',
        'Modelo',
        'Num_serie',
        'Chofer'
        ];
}

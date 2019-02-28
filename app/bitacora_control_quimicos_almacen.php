<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora_control_quimicos_almacen extends Model
{
    		protected $fillable = [
    		'NombreComercial',
            'NoRegistroUnico',
            'NombreIngredienteActivo',
            'FechaEmision'

        ];
}

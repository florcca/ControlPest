<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora_mantenimiento_equipo extends Model
{
    //
    
        	protected $fillable = [
        	'TipoEquipo',
            'NoUnidad',
            'CambioEmpaques',
            'Lubricacion',
            'CambioBoquillas',
            'Fecha',
            'Observaciones'
        ];
}

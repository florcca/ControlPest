<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora_residuos_plaguicida extends Model
{
    //
    protected $fillable = [
    	'Fecha',
        'NoProducto',
        'CantidadDesechos',
        'DestinoFinal',
        'Observaciones'
    ];
}

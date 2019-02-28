<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viatico extends Model
{
    protected $fillable = [
        'ruta',
        'tecnico',
        'fecha',
        'fondo',
        'gastos',
        'comida',
        'gasolina',
        'hotel',
        'extra'
        ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaServicio extends Model
{
    //
    protected $fillable = [
         'nombre',
         'domicilio',
         'ciudad',
         'telefono',
         'lugar_de_aplicacion',
         'responsable',
         'fecha',
         'id_tipo_plaga',
         'id_giro_establecimiento',
         'id_caracteristicas_locales',
         'id_informacion'
     ];
}

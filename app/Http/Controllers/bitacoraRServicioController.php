<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bitacoraRServicioController extends Controller
{
    //
    public function create()
    {
      return view('bitacoraRServicio.guardarBR');
    }
}

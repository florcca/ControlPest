<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bitacoraQuimicoController extends Controller
{
    //
    public function create()
    {
      return view('BitacoraQuimico.guardarBQ');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acercadeController extends Controller
{
    //
    public function index()
    {
      return view('acerca_de.acerca_de');
    }
}

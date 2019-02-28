<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class BitacoraServeController extends Controller
{
    public function index()
    {
        $view = \View::make('hojaServicio2.BitacoraServicioPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('BITÁCORA DE SERVICIO');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('BITÁCORA DE SERVICIO.pdf');

    }
}

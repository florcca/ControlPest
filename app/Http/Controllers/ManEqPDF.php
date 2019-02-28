<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class ManEqPDF extends Controller
{
    public function index()
    {
        $view = \View::make('Formatos-Ind.mantenimientoEqPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Mantenimiento de equípos');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Mantenimiento de equípos.pdf');

    }
}
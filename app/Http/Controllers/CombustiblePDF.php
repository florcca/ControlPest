<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class CombustiblePDF extends Controller
{
    public function index()
    {
        $view = \View::make('Formatos-Ind.rcPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Rendimiento de combustible');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Rendimiento de combustible.pdf');

    }
}
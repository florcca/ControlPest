<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class BitacoraResiduosController extends Controller
{
    public function index()
    {
        $view = \View::make('BitacoraResiduosPlaguicidas.BitacoraResiduoPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('BITÁCORA DE RESIDUOS DE PLAGUICIDAS');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('BITÁCORA DE RESIDUOS DE PLAGUICIDAS.pdf');

    }
}

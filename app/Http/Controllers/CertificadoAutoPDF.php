<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class CertificadoAutoPDF extends Controller
{
    public function show($id)
    {
        return "awuevo";
    	$view = \View::make('certificado-fumigaciones.createautoPDF');    
        $pdf = new TCPDF();
        $pdf::changeFormat('A5');
        $pdf::SetTitle('Certificado Vehicular');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Certificado Vehicular.pdf');
    }
}

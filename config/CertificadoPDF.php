<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class CertificadoPDF extends Controller
{
    public function index()
    {
        $view = \View::make('certificado-fumigaciones.createPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Certificado');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Certificado Fumigación.pdf');

    }
}

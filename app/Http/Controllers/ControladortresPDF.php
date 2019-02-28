<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Elibyy\TCPDF\Facades\TCPDF;


class ControladortresPDF extends Controller
{
    //

    public function index(){

    }
    public function show($id){

    	$hojaservicioPDF = DB::table('Hoja_servicios')->where('id', $id)->get();
    	$informacionPDF = DB::table('informacions')->where('id', $hojaservicioPDF[0]->id_informacion)->get();

    	$view = \View::make('certificado-Fumigaciones.createPDF')

    	->with('hojaservicioPDF', $hojaservicioPDF)
    	->with('informacionPDF', $informacionPDF);


        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Certificado');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Certificado Fumigación.pdf');

    }
}

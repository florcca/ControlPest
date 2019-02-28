<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;


class CertificadoPDF extends Controller
{
    public function verpdf($id)
    {


    	$hojaservicioPDF = DB::table('Hoja_servicios')->where('id', $id)->get();
   		$caracteristicaslocPDF = DB::table('caracteristica_locals')->where('id', $hojaservicioPDF[0]->id_caracteristicas_locales)->get();
   		$tipoplagaPDF = DB::table('tipo_de_plagas')->where('id', $hojaservicioPDF[0]->id_tipo_plaga)->get();
   		$giroestablecimientoPDF = DB::table('giro_establecimientos')->where('id', $hojaservicioPDF[0]->id_giro_establecimiento)->get();
   		$quimicosutilizarPDF = DB::table('quimico_a_utilizars')->where('id_hoja_servicio', $hojaservicioPDF[0]->id)->get();
   		$informacionPDF = DB::table('informacions')->where('id', $hojaservicioPDF[0]->id_informacion)->get();


   		return $hojaservicioPDF;

   		$nombre=$hojaservicioPDF -> nombre;


        $view = \View::make('certificado-fumigaciones.createPDF');
       
        
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Certificado');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Certificado Fumigación.pdf');

    }
}

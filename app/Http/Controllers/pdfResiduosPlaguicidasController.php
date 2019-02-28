<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
class pdfResiduosPlaguicidasController extends Controller
{
        public function store(Request $request){
        $registros = DB::table('bitacora_residuos_plaguicidas')->where('Fecha', 'like', '%' .$request['buscador']. '%')->get();
        $view = \View::make('BitacoraResiduosPlaguicidas.BitacoraResiduoPDF')->with('registros', $registros);
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Residuos Plaguicidas');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Residuos_plaguicidas.pdf');
    }
}

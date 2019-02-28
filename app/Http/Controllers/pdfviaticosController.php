<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
class pdfviaticosController extends Controller
{
    public function store(Request $request){
        $registros = DB::table('viaticos')->where('Fecha', 'like', '%' .$request['buscador']. '%')->get();
        $view = \View::make('viaticos.ViaticosPDF')->with('registros', $registros);
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Viaticos');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Viaticos.pdf');
    }
}

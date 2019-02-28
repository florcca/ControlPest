<?php

namespace App\Http\Controllers;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pdfBCQAlmacenController extends Controller
{
    public function index(){
    }
    public function store(Request $request){
        $registros = DB::table('bitacora_control_quimicos_almacens')->where('FechaEmision', 'like', '%' .$request['buscador']. '%')->get();
        $view = \View::make('BitacoraControlQuimicosAlmacen.cqPDF')->with('registros', $registros);
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('ControlQuimicosAlmacen');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('Contro_Quimicos_Almacen.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
class pdfBitacoraVehiculosController extends Controller
{
    public function index(){
        
    }
    public function store(Request $request){
        $registros = DB::table('nuevo_vehiculos')->where('Fecha', 'like', '%' .$request['buscador']. '%')->get();
        $view = \View::make('BitacoraMantenimientoEquipo.mantenimientoEqPDF')->with('registros', $registros);
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('mantenimientoEquipo');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('mantenimientoEquipo.pdf');
    }
}

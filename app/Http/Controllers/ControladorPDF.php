<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Elibyy\TCPDF\Facades\TCPDF;

class ControladorPDF extends Controller
{
    public function index()
    {

    	

    }
   	public function show($id){

   		$hojaservicioPDF = DB::table('Hoja_servicios')->where('id', $id)->get();
   		$caracteristicaslocPDF = DB::table('caracteristica_locals')->where('id', $hojaservicioPDF[0]->id_caracteristicas_locales)->get();
   		$tipoplagaPDF = DB::table('tipo_de_plagas')->where('id', $hojaservicioPDF[0]->id_tipo_plaga)->get();
   		$giroestablecimientoPDF = DB::table('giro_establecimientos')->where('id', $hojaservicioPDF[0]->id_giro_establecimiento)->get();
   		$quimicosutilizarPDF = DB::table('quimico_a_utilizars')->where('id_hoja_servicio', $hojaservicioPDF[0]->id)->get();
   		$informacionPDF = DB::table('informacions')->where('id', $hojaservicioPDF[0]->id_informacion)->get();

   		$cc = count($quimicosutilizarPDF);
   		$var1 ="";
   		$var2 ="";
   		$var3 =0;
   		$var4 ="";
   		$var5 ="";
   		$var6 =0;
   		$var7 ="";
   		$var8 ="";
   		$var9 =0;
   		$var10 ="";
   		$var11 ="";
   		$var12 =0;
   		for($c=0;$c < $cc; $c++){
   			if($c == 0){
   				$var1=$quimicosutilizarPDF[$c]->codigo;
   				$var2=$quimicosutilizarPDF[$c]->dosis;
   				$var3=$quimicosutilizarPDF[$c]->cantidad;
   			}
   			if($c == 1){
   				$var4=$quimicosutilizarPDF[$c]->codigo;
   				$var5=$quimicosutilizarPDF[$c]->dosis;
   				$var6=$quimicosutilizarPDF[$c]->cantidad;
   			}
   			if($c == 2){
   				$var7=$quimicosutilizarPDF[$c]->codigo;
   				$var8=$quimicosutilizarPDF[$c]->dosis;
   				$var9=$quimicosutilizarPDF[$c]->cantidad;
   			}
   			if($c == 3){
   				$var10=$quimicosutilizarPDF[$c]->codigo;
   				$var11=$quimicosutilizarPDF[$c]->dosis;
   				$var12=$quimicosutilizarPDF[$c]->cantidad;
   			}
   		}

   		
   		
   		$view = \View::make('HojaServicio.createPDF')

   		->with('hojaservicioPDF', $hojaservicioPDF)
   		->with('tipoplagaPDF', $tipoplagaPDF)
   		->with('giroestablecimientoPDF', $giroestablecimientoPDF)
   		->with('caracteristicaslocPDF', $caracteristicaslocPDF)
   		->with('var1',$var1)
   		->with('var2',$var2)
   		->with('var3',$var3)
   		->with('var4',$var4)
   		->with('var5',$var5)
   		->with('var6',$var6)
   		->with('var7',$var7)
   		->with('var8',$var8)
   		->with('var9',$var9)
   		->with('var10',$var10)
   		->with('var11',$var11)
   		->with('var12',$var12)
   		->with('informacionPDF', $informacionPDF);


        $pdf = new TCPDF();
        $pdf::SetTitle('Hoja de Servicio');
        $pdf::AddPage();
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('hoja_servicio_'. $hojaservicioPDF[0]->lugar_de_aplicacion . '.pdf');
   	}
}
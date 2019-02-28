<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\tipo_de_plaga;
use App\giro_establecimiento;
use App\caracteristica_local;
use App\informacion;
use App\HojaServicio;
use App\quimico_a_utilizar;
use Elibyy\TCPDF\Facades\TCPDF;
use Carbon\Carbon;
 



class HojaServicioController extends Controller
{
    public function index(){
      

      $hojaser = HojaServicio::paginate(5);
        return view('HojaServicio.index')->with('hojaser',$hojaser);

   
         }
    public function indexx()
    {
        $hojaser = HojaServicio::all();
        return view('HojaServicio.buscarClientes')->with('hojaser',$hojaser);
    }


    public function store(Request $request){
      $primera =  Carbon::parse($request['fecha']);
      $segunda =  Carbon::parse($request['fecha_firma']);
      $primera_aplicacion =  Carbon::parse($request['fecha_apli']);
      $segunda_aplicacion =  Carbon::parse($request['fecha_prox_apli']);
      //$length = $primera->diffInDays($segunda);
      if(($primera > $segunda)||($primera_aplicacion > $segunda_aplicacion)){
        echo '<script name="accion">alert("Verifique las fechas") </script>';
        return view('HojaServicio.create');
      }
  
      if ($request['check_pt1'] == '1'){
        $ptz1 = $request['check_pt1'];
      }
      else {
        $ptz1 = '0';
      }
      if ($request['check_pt2'] == '1'){
        $ptz2 = $request['check_pt2'];
      }
      else {
        $ptz2 = '0';
      }
      if ($request['check_pt3'] == '1'){
        $ptz3 = $request['check_pt3'];
      }
      else {
        $ptz3 = '0';
      }
      if ($request['check_pt4'] == '1'){
        $ptz4 = $request['check_pt4'];
      }
      else {
        $ptz4 = '0';
      }
      if ($request['check_pt5'] == '1'){
        $ptz5 = $request['check_pt5'];
      }
      else {
        $ptz5 = '0';
      }
      if ($request['check_pt6'] == '1'){
        $ptz6 = $request['check_pt6'];
      }
      else {
        $ptz6 = '0';
      }
      if ($request['check_pt7'] == '1'){
        $ptz7 = $request['check_pt7'];
      }
      else {
        $ptz7 = '0';
      }
      if ($request['check_pt8'] == '1'){
        $ptz8 = $request['check_pt8'];
      }
      else {
        $ptz8 = '0';
      }
      if ($request['check_pt9'] == '1'){
        $ptz9 = $request['check_pt9'];
      }
      else {
        $ptz9 = '0';
      }
      if ($request['check_pt10'] == '1'){
        $ptz10 = $request['check_pt10'];
      }
      else {
        $ptz10 = '0';
      }
      if ($request['checkcaractLocal_nohab'] == '1'){
        $no_hab = $request['checkcaractLocal_nohab'];
      }
      else {
        $no_hab  = '0';
      }
      if ($request['checkcaractLocal_casjar'] == '1'){
        $local_casjar = $request['checkcaractLocal_casjar'];
      }
      else {
        $local_casjar = '0';
      }
      if ($request['checkcaractLocal_matpar'] == '1'){
        $local_matpr= $request['checkcaractLocal_matpar'];
      }
      else {
        $local_matpr = '0';
      }
      if ($request['checkcaractLocal_tip_enj'] == '1'){
        $local_tipoenj = $request['checkcaractLocal_tip_enj'];
      }
      else {
        $local_tipoenj = '0';
      }
      if ($request['checkcaractLocal_tub'] == '1'){
        $local_tub = $request['checkcaractLocal_tub'];
      }
      else {
        $local_tub = '0';
      }
      if ($request['checkcaractLocal_elect'] == '1'){
        $local_elec= $request['checkcaractLocal_elect'];
      }
      else {
        $local_elec = '0';
      }
      if ($request['otros_local'] == '1'){
        $local_otros = $request['otros_local'];
      }
      else {
        $local_otros = '0';
      }



      \App\tipo_de_plaga::create([
        'ptz1'=>$ptz1,
        'ptz2'=>$ptz2,
        'ptz3'=>$ptz3,
        'ptz4'=>$ptz4,
        'ptz5'=>$ptz5,
        'ptz6'=>$ptz6,
        'ptz7'=>$ptz7,
        'ptz8'=>$ptz8,
        'ptz9'=>$ptz9,
        'ptz10'=>$ptz10
      ]);


      \App\giro_establecimiento::create([
        'casa_abitacion'=>$request['casa_habitacion'],
        'restaurante'=>$request['restaurante'],
        'abarrotes'=>$request['abarrotes'],
        'bodega'=>$request['bodega'],
        'carniceria'=>$request['caniceria'],
        'consutorio'=>$request['consutorio'],
        'otroscheck'=>$request['otros'],
        'otrosstring'=>$request['otros_giro_establecimiento']
      ]);

      \App\caracteristica_local::create([
        'no_habitado'=>$no_hab,
        'casa_gardin'=>$local_casjar,
        'material_paredes'=>$local_matpr,
        'tipo_de_engarre'=>$local_tipoenj,
        'tipo_tuberias'=>$local_tub,
        'Electrodomesticos'=>$local_elec,
        'otros'=>$request['otros_caracteristicas_local']
      ]);

      \App\informacion::create([
        'fecha_de_aplicacion'=>$request['fecha_apli'],
        'fecha_proximo_servicio'=>$request['fecha_prox_apli'],
        'In_preaplicacion'=>$request['ind_pre'],
        'In_posaplicacion'=>$request['ind_pos']
      ]);

      $tipos= tipo_de_plaga::all();
      $id_tipo_de_plaga=$tipos->last();

      $giro_establecimientoo = giro_establecimiento::all();
      $id_giro_establecimiento=$giro_establecimientoo->last();

      $caracteristicas_loc = caracteristica_local::all();
      $id_caracteristicas_loc=$caracteristicas_loc->last();

      $informacion = informacion::all();
      $id_informaion=$informacion->last();

      \App\HojaServicio::create([
        'nombre'=>$request['nombre'],
        'domicilio'=>$request['domicilio'],
        'ciudad'=>$request['ciudad'],
        'telefono'=>$request['telefono'],
        'lugar_de_aplicacion'=>$request['lugar_aplicacion'],
        'responsable'=>$request['tecnico_resp'],
        'fecha'=>$request['fecha'],
        'id_tipo_plaga'=>$id_tipo_de_plaga['id'],
        'id_giro_establecimiento'=>$id_giro_establecimiento['id'],
        'id_caracteristicas_locales'=>$id_caracteristicas_loc['id'],
        'id_informacion'=>$id_informaion['id']
      ]);

      $hoja_servicio = HojaServicio::all();
      $id_hoja_servicio=$hoja_servicio->last();

      \App\quimico_a_utilizar::create([
        'codigo'=>$request['caja_cod1'],
        'dosis'=>$request['caja_dosis1'],
        'cantidad'=>$request['caja_cant1'],
        'id_hoja_servicio'=>$id_hoja_servicio['id']
      ]);
      if($request['caja_cod2'] != "" && $request['caja_dosis2'] != "" && $request['caja_cant2']!= ""){
        \App\quimico_a_utilizar::create([
          'codigo'=>$request['caja_cod2'],
          'dosis'=>$request['caja_dosis2'],
          'cantidad'=>$request['caja_cant2'],
          'id_hoja_servicio'=>$id_hoja_servicio['id']
        ]);
      }
      if($request['caja_cod3'] != "" && $request['caja_dosis3'] != "" && $request['caja_cant3']!= ""){
      \App\quimico_a_utilizar::create([
        'codigo'=>$request['caja_cod3'],
        'dosis'=>$request['caja_dosis3'],
        'cantidad'=>$request['caja_cant3'],
        'id_hoja_servicio'=>$id_hoja_servicio['id']
      ]);
    }
    if($request['caja_cod4'] != "" && $request['caja_dosis4'] != "" && $request['caja_cant4']!= ""){
      \App\quimico_a_utilizar::create([
        'codigo'=>$request['caja_cod4'],
        'dosis'=>$request['caja_dosis4'],
        'cantidad'=>$request['caja_cant4'],
        'id_hoja_servicio'=>$id_hoja_servicio['id']
      ]);
    }


    echo '<script name="accion">alert("Guardado de forma exitosa") </script>';

    
    return redirect()->action('HojaServicioController@index');
    }


 public function create()
    {      
        return view('HojaServicio.create');


    }
  public function destroy($id)
    { 
      return "Eliminar";
      $varUsuario = HojaServicio::find($id);
     
      
      $Hoja -> delete();

      echo '<script name="accion">warning("Eliminado) </script>';

      return redirect()->action('HojaServicioController@index');


    }

 public function edit($id)
    { 
    
        
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
       return view('HojaServicio.edit')
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
    }


public function update(Request $request, $id)
{ 
  if ($request['check_pt1'] == '1'){
        $ptz1 = $request['check_pt1'];
      }
      else {
        $ptz1 = '0';
      }
      if ($request['check_pt2'] == '1'){
        $ptz2 = $request['check_pt2'];
      }
      else {
        $ptz2 = '0';
      }
      if ($request['check_pt3'] == '1'){
        $ptz3 = $request['check_pt3'];
      }
      else {
        $ptz3 = '0';
      }
      if ($request['check_pt4'] == '1'){
        $ptz4 = $request['check_pt4'];
      }
      else {
        $ptz4 = '0';
      }
      if ($request['check_pt5'] == '1'){
        $ptz5 = $request['check_pt5'];
      }
      else {
        $ptz5 = '0';
      }
      if ($request['check_pt6'] == '1'){
        $ptz6 = $request['check_pt6'];
      }
      else {
        $ptz6 = '0';
      }
      if ($request['check_pt7'] == '1'){
        $ptz7 = $request['check_pt7'];
      }
      else {
        $ptz7 = '0';
      }
      if ($request['check_pt8'] == '1'){
        $ptz8 = $request['check_pt8'];
      }
      else {
        $ptz8 = '0';
      }
      if ($request['check_pt9'] == '1'){
        $ptz9 = $request['check_pt9'];
      }
      else {
        $ptz9 = '0';
      }
      if ($request['check_pt10'] == '1'){
        $ptz10 = $request['check_pt10'];
      }
      else {
        $ptz10 = '0';
      }
      if ($request['checkcaractLocal_nohab'] == '1'){
        $no_hab = $request['checkcaractLocal_nohab'];
      }
      else {
        $no_hab  = '0';
      }
      if ($request['checkcaractLocal_casjar'] == '1'){
        $local_casjar = $request['checkcaractLocal_casjar'];
      }
      else {
        $local_casjar = '0';
      }
      if ($request['checkcaractLocal_matpar'] == '1'){
        $local_matpr= $request['checkcaractLocal_matpar'];
      }
      else {
        $local_matpr = '0';
      }
      if ($request['checkcaractLocal_tip_enj'] == '1'){
        $local_tipoenj = $request['checkcaractLocal_tip_enj'];
      }
      else {
        $local_tipoenj = '0';
      }
      if ($request['checkcaractLocal_tub'] == '1'){
        $local_tub = $request['checkcaractLocal_tub'];
      }
      else {
        $local_tub = '0';
      }
      if ($request['checkcaractLocal_elect'] == '1'){
        $local_elec= $request['checkcaractLocal_elect'];
      }
      else {
        $local_elec = '0';
      }
      if ($request['otros_local'] == '1'){
        $local_otros = $request['otros_local'];
      }
      else {
        $local_otros = '0';
      }
    $tipo= tipo_de_plaga::find($id);
    $tipo->ptz1=$ptz1;
    $tipo->ptz2=$ptz2;
    $tipo->ptz3=$ptz3;
    $tipo->ptz4=$ptz4;
    $tipo->ptz5=$ptz5;
    $tipo->ptz6=$ptz6;
    $tipo->ptz7=$ptz7;
    $tipo->ptz8=$ptz8;
    $tipo->ptz9=$ptz9;
    $tipo->ptz10=$ptz10;
    $tipo-> save();




    $giro=giro_establecimiento::find($id);
    $giro->casa_abitacion=$request['casa_habitacion'];
    $giro->restaurante=$request['restaurante'];
    $giro->abarrotes=$request['abarrotes'];
    $giro->bodega=$request['bodega'];
    $giro->carniceria=$request['caniceria'];
    $giro->consutorio=$request['consutorio'];
    $giro->otroscheck=$request['otros'];
    $giro->otrosstring=$request['otros_giro_establecimiento'];
    $giro->save();

    $carac=caracteristica_local::find($id);
    $carac->no_habitado=$no_hab;
    $carac->casa_gardin=$local_casjar;
    $carac->material_paredes=$local_matpr;
    $carac->tipo_de_engarre=$local_tipoenj;
    $carac->tipo_tuberias=$local_tub;
    $carac->Electrodomesticos=$local_elec;
    $carac->otros=$request['otros_caracteristicas_local'];
    $carac->save();
    
        
    $info=informacion::find($id);
    $info->fecha_de_aplicacion=$request['fecha_apli'];
    $info->fecha_proximo_servicio=$request['fecha_prox_apli'];
    $info->In_preaplicacion=$request['ind_pre'];
    $info->In_posaplicacion=$request['ind_pos'];
    $info->save();

    $hoja=HojaServicio::find($id);
    $hoja->nombre=$request['nombre'];
    $hoja->domicilio=$request['domicilio'];
    $hoja->ciudad=$request['ciudad'];
    $hoja->telefono=$request['telefono'];
    $hoja->lugar_de_aplicacion=$request['lugar_aplicacion'];
    $hoja->responsable=$request['tecnico_resp'];
    $hoja->fecha=$request['fecha'];
    $hoja->save();


    $quim = quimico_a_utilizar::where("id_hoja_servicio",$id)->get();
    $quim[0]->codigo=$request['caja_cod1'];
    $quim[0]->dosis=$request['caja_dosis1'];
    $quim[0]->cantidad=$request['caja_cant1'];
    $quim[0]->save();
    if(count($quim)>1){
      $quim[1]->codigo=$request['caja_cod2'];
      $quim[1]->dosis=$request['caja_dosis2'];
      $quim[1]->cantidad=$request['caja_cant2'];
      $quim[1]->save();
    }
    else{
      if($request['caja_cod2'] != "" && $request['caja_dosis2'] != "" && $request['caja_cant2']!= ""){
        \App\quimico_a_utilizar::create([
          'codigo'=>$request['caja_cod2'],
          'dosis'=>$request['caja_dosis2'],
          'cantidad'=>$request['caja_cant2'],
          'id_hoja_servicio'=>$id
        ]);
      }
    }
    
    if(count($quim)>2){
      $quim[2]->codigo=$request['caja_cod3'];
      $quim[2]->dosis=$request['caja_dosis3'];
      $quim[2]->cantidad=$request['caja_cant3'];
      $quim[2]->save();
    }
    else{
       if($request['caja_cod3'] != "" && $request['caja_dosis3'] != "" && $request['caja_cant3']!= ""){
        \App\quimico_a_utilizar::create([
          'codigo'=>$request['caja_cod3'],
          'dosis'=>$request['caja_dosis3'],
          'cantidad'=>$request['caja_cant3'],
          'id_hoja_servicio'=>$id
        ]);
      }
    }
    
    if(count($quim)>3){
      $quim[3]->codigo=$request['caja_cod4'];
      $quim[3]->dosis=$request['caja_dosis4'];
      $quim[3]->cantidad=$request['caja_cant4'];
      $quim[3]->save();
    }
    else{
        if($request['caja_cod4'] != "" && $request['caja_dosis4'] != "" && $request['caja_cant4']!= ""){
        \App\quimico_a_utilizar::create([
          'codigo'=>$request['caja_cod4'],
          'dosis'=>$request['caja_dosis4'],
          'cantidad'=>$request['caja_cant4'],
          'id_hoja_servicio'=>$id
        ]);
      }
    }
    
       echo '<script name="accion">alert("¡El cliente ha sido modificado con éxito!") </script>';
        $users = HojaServicio:: orderBy('id', 'ASC')-> paginate(5);
    return view('HojaServicio.index')->with('hojaser',$users);


}





  public function show($id){
       $quim = quimico_a_utilizar::where("id_hoja_servicio",$id)->get();
       for($c=0; $c<count($quim);$c++){
          $quim[$c]->delete();
       }
    
       $hoja_ser=HojaServicio::find($id);
       $hoja_ser->delete();
       $tipo_plaga=tipo_de_plaga::find($id);
       $tipo_plaga->delete();
       $giro_est=giro_establecimiento::find($id);
       $giro_est->delete();
       $caract_loc=caracteristica_local::find($id);
       $inf=informacion::find($id);
       $caract_loc->delete();
       $inf->delete();

       echo '<script name="accion">alert("¡El cliente ha sido eliminado con éxito!") </script>';
        $users = HojaServicio:: orderBy('id', 'ASC')-> paginate(5);
    return view('HojaServicio.index')->with('hojaser',$users);
  }



}

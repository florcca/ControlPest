<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certificado_vehicular;

class CertificadoVehicularController extends Controller
{
    public function index(){
      $certificado = certificado_vehicular::paginate(5);
      return view('certificado_vehicular.index')->with('certificado',$certificado);
    }
    public function create(){
    	return view ('certificado_vehicular.create');
    }
    public function store(Request $request){
    	\App\certificado_vehicular::create([
        'nombre'=>$request['nombre'],
      'domicilio'=>$request['domicilio'],
      'ciudad'=>$request['ciudad'],
      'empresa'=>$request['empresa'],
      'tipo_v'=>$request['tipo_v'],
      'placas'=>$request['placas'], 
      'giro_v'=>$request['giro_v'],
      'tipo_quimico_aplicado'=>$request['tipo_quimico_aplicado'],
      'fecha_fumigacion'=>$request['fecha_fumigacion'],
      'fecha_vencimiento'=>$request['fecha_vencimiento'],
      'tecnico_responsable'=>$request['tecnico_responsable']
      ]);
        echo '<script name="accion">alert("¡El registro ha sido guardado con éxito!") </script>';
      $certificado = certificado_vehicular::paginate(5);
      return view('certificado_vehicular.index')->with('certificado',$certificado);
    }
    public function show($id){

      $varUsuario = certificado_vehicular::find($id);
     
      
      $varUsuario-> delete($id);

      echo '<script name="accion">warning("Eliminado") </script>';

      $certificado = certificado_vehicular::paginate(5);
        return view('certificado_vehicular.index')->with('certificado',$certificado);
    }
   
    


    public function edit($id){
       $certificado= certificado_vehicular::find($id);
        return view('certificado_vehicular.edit')->with('certificado',$certificado);
    }
    public function update(Request $request,$id){
      $certificado = certificado_vehicular::find($id);

      $certificado->nombre=$request['nombre'];
      $certificado->domicilio=$request['domicilio'];
      $certificado->ciudad=$request['ciudad'];
      $certificado->empresa=$request['empresa'];
      $certificado->tipo_v=$request['tipo_v'];
      $certificado->placas=$request['placas'];
      $certificado->giro_v=$request['giro_v'];
      $certificado->tipo_quimico_aplicado=$request['tipo_quimico_aplicado'];
      $certificado->fecha_fumigacion=$request['fecha_fumigacion'];
      $certificado->fecha_vencimiento=$request['fecha_vencimiento'];
      $certificado->tecnico_responsable=$request['tecnico_responsable'];
      $certificado-> save();
      
         echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


       $certificado = certificado_vehicular::paginate(5);
      return view('certificado_vehicular.index')->with('certificado',$certificado);


    }
    public function indexx()
    {


      $certificado = certificado_vehicular::all();
      return view('certificado_vehicular.indexx')->with('certificado',$certificado);
    }   



}

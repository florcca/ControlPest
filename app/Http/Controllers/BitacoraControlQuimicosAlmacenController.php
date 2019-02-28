<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora_control_quimicos_almacen;

class BitacoraControlQuimicosAlmacenController extends Controller
{
       public function index()
    {
 
      $bitacoraMan = bitacora_control_quimicos_almacen::paginate(5);
        return view('BitacoraControlQuimicosAlmacen.index')->with('bitacoraMan',$bitacoraMan);
    }

    public function create(){
    	return view ('BitacoraControlQuimicosAlmacen.create');
    }

    public function store(Request $request){
        \App\bitacora_control_quimicos_almacen::create([
        'NombreComercial'=>$request['nombre'],
         'NoRegistroUnico'=>$request['numero_unico'],
         'NombreIngredienteActivo'=>$request['ingrediente'],
         'FechaEmision'=>$request['fecha_emision']
      ]);

        echo '<script name="accion">alert("¡El registro ha sido guardado con éxito!") </script>';
      $bitacoraMan = bitacora_control_quimicos_almacen::paginate(5);
        return view('BitacoraControlQuimicosAlmacen.index')->with('bitacoraMan',$bitacoraMan);
    }

    public function show($id){


      $varUsuario = bitacora_control_quimicos_almacen::find($id);
     
      
      $varUsuario-> delete();

      echo '<script name="accion">warning("Eliminado") </script>';

      $bitacoraMan = bitacora_control_quimicos_almacen::paginate(5);
        return view('BitacoraControlQuimicosAlmacen.index')->with('bitacoraMan',$bitacoraMan);
    }

    public function edit($id){
       $bitacoraMan= bitacora_control_quimicos_almacen::find($id);
        return view('BitacoraControlQuimicosAlmacen.edit')->with('bitacoraMan',$bitacoraMan);
    }
    public function update(Request $request,$id){
      $bitacoraMan = bitacora_control_quimicos_almacen::find($id);

      $bitacoraMan->NombreComercial=$request['nombre'];
      $bitacoraMan->NoRegistroUnico=$request['numero_unico'];
      $bitacoraMan->NombreIngredienteActivo=$request['ingrediente'];
      $bitacoraMan->FechaEmision=$request['fecha_emision'];
      $bitacoraMan-> save();
      
         echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


      $bitacoraMan = bitacora_control_quimicos_almacen::paginate(10);
        return view('BitacoraControlQuimicosAlmacen.index')->with('bitacoraMan',$bitacoraMan);



    }


    public function indexx()
    {
        $bitacoraMan = bitacora_control_quimicos_almacen::all();
        return view('BitacoraControlQuimicosAlmacen.buscarRegistrosQA')->with('bitacoraMan',$bitacoraMan);
    }


}

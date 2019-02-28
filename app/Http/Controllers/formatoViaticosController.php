<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viatico;

class formatoViaticosController extends Controller
{
//si estas editando este codigo y no eres Flor, Brenda, Aram o Eduardo un saludo, cuida el codigo 
//-----------------------Te amo!!!!

    public function index(){
         
        $viaticos = viatico::paginate(5);
        return view('viaticos.index')->with('viaticos',$viaticos);
    }
    public function indexx()
    {
        $viaticos = viatico::all();
        return view('viaticos.indexx')->with('viaticos',$viaticos);
    }    
    public function create()
    {
        return view('viaticos/create');
    }
    public function store(Request $request){
        \App\viatico::create([
            'ruta'=>$request['ruta'],
            'tecnico'=>$request['tecnico'],
            'fecha'=>$request['fecha'],
            'fondo'=>$request['fondo'],
            'comida'=>$request['comida'],
            'gasolina'=>$request['gasolina'],
            'hotel'=>$request['hotel'],
            'extra'=>$request['extra']
          ]);
          echo '<script name="accion">alert("¡Ha sido guardado con éxito!") </script>';
          $viaticos = viatico::paginate(5);
          return view('viaticos.index')->with('viaticos',$viaticos);
    }
    public function show($id){
        $viaticos=viatico::find($id);
        $viaticos->delete();
        echo '<script name="accion">alert("¡Se ha sido eliminado con éxito!") </script>';
        $viaticos = viatico::paginate(5);
        return view('viaticos.index')->with('viaticos',$viaticos);
   }
   public function edit($id)
    {
        $viatico= viatico::find($id);
        return view('viaticos.edit')->with('viatico',$viatico);

    }

    public function update(Request $request, $id)
    {
        $viaticos = viatico::find($id);
        $viaticos->ruta=$request['ruta'];
        $viaticos->tecnico=$request['tecnico'];
        $viaticos->fecha=$request['fecha'];
        $viaticos->fondo=$request['fondo'];     
        $viaticos->comida=$request['comida'];     
        $viaticos->gasolina=$request['gasolina'];     
        $viaticos->hotel=$request['hotel'];     
        $viaticos->extra=$request['extra'];     
        $viaticos-> save();


         echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


      $viaticoss = viatico::paginate(10);
        return view('viaticos.index')->with('viaticos',$viaticoss);

        }
}

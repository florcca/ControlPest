<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora_mantenimiento_equipo;



use Storage;
use Illuminate\Support\Facades\Validator;
use Excel; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;



class BitacoraMantenimientoEquipoController extends Controller
{



    public function ExportBME()
    {
        Excel::create('clients', function($excel){
            $excel -> sheet('clients', function($sheet){
                $sheet-> loadView('BitacoraMantenimientoEquipo\BuscarRegistrosME');
            });
        })->export('xlsx');
        
    }




    public function index(){

        $bitacoraMan = bitacora_mantenimiento_equipo::paginate(5);
        return view('BitacoraMantenimientoEquipo.index')->with('bitacoraMan',$bitacoraMan);

        //return view ('BitacoraMantenimientoEquipo.index');

    }

    public function indexx()
    {
        $bitacoraMan = bitacora_mantenimiento_equipo::all();
        return view('BitacoraMantenimientoEquipo.buscarRegistrosME')->with('bitacoraMan',$bitacoraMan);
    }

    public function store(Request $request){
        \App\bitacora_mantenimiento_equipo::create([
        'TipoEquipo'=>$request['TipoEquipo'],
        'NoUnidad'=>$request['NoUnidad'],
        'CambioEmpaques'=>$request['CambioEmpaques'],
        'Lubricacion'=>$request['Lubricacion'],
        'CambioBoquillas'=>$request['CambioBoquillas'],
        'Fecha'=>$request['Fecha'],
        'Observaciones'=>$request['Observaciones']
        
      ]);

        echo '<script name="accion">alert("¡El registro ha sido guardado con éxito!") </script>';
      $bitacoraMan = bitacora_mantenimiento_equipo::paginate(5);
        return view('BitacoraMantenimientoEquipo.index')->with('bitacoraMan',$bitacoraMan);
    }
    public function create(){
        return view('BitacoraMantenimientoEquipo.create');
    }

    public function show($id)
    { 
      $varUsuario = bitacora_mantenimiento_equipo::find($id);
     
      
      $varUsuario-> delete();

      echo '<script name="accion">warning("Eliminado") </script>';

      $bitacoraMan = bitacora_mantenimiento_equipo::paginate(5);
        return view('BitacoraMantenimientoEquipo.index')->with('bitacoraMan',$bitacoraMan);


    }

    public function edit($id)
    {
        $bitacoraMan= bitacora_mantenimiento_equipo::find($id);
 
        return view('BitacoraMantenimientoEquipo.edit')->with('bitacoraMan',$bitacoraMan);

    }

    public function update(Request $request, $id)
    {

      //dd($request->all());
        $bitacoraMan = bitacora_mantenimiento_equipo::find($id);
        $bitacoraMan->TipoEquipo=$request['TipoEquipo'];
        $bitacoraMan->NoUnidad=$request['NoUnidad'];
        $bitacoraMan->CambioEmpaques=$request['CambioEmpaques'];
        $bitacoraMan->Lubricacion=$request['Lubricacion'];
        $bitacoraMan->CambioBoquillas=$request['CambioBoquillas'];
        $bitacoraMan->Fecha=$request['Fecha'];
        $bitacoraMan->Observaciones=$request['Observaciones'];    
        $bitacoraMan-> save();

             //dd($userr);
         echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


      $bitacoraMan = bitacora_mantenimiento_equipo::paginate(10);
        return view('BitacoraMantenimientoEquipo.index')->with('bitacoraMan',$bitacoraMan);

        }
    
}

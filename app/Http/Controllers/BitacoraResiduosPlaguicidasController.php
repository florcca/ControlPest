<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora_residuos_plaguicida;

class BitacoraResiduosPlaguicidasController extends Controller
{
     public function index()
    {
 
      $bitacoraMan = bitacora_residuos_plaguicida::paginate(5);
        return view('BitacoraResiduosPlaguicidas.index')->with('bitacoraMan',$bitacoraMan);
    }

    public function create(){
    	return view ('BitacoraResiduosPlaguicidas.create');
    }

    public function store(Request $request){
        \App\bitacora_residuos_plaguicida::create([
        'Fecha'=>$request['Fecha'],
        'NoProducto'=>$request['NoProducto'],
        'CantidadDesechos'=>$request['CantidadDesecho'],
        'DestinoFinal'=>$request['DestinoFinal'],
        'Observaciones'=>$request['Observaciones']
      ]);
        echo '<script name="accion">alert("¡El registro ha sido guardado con éxito!") </script>';
      $bitacoraMan = bitacora_residuos_plaguicida::paginate(5);
        return view('BitacoraResiduosPlaguicidas.index')->with('bitacoraMan',$bitacoraMan);
    }

    public function show($id){


      $varUsuario = bitacora_residuos_plaguicida::find($id);
     
      
      $varUsuario-> delete();

      echo '<script name="accion">warning("Eliminado") </script>';

      $bitacoraMan = bitacora_residuos_plaguicida::paginate(5);
        return view('BitacoraResiduosPlaguicidas.index')->with('bitacoraMan',$bitacoraMan);
    }



    public function edit($id)
    {
        $bitacoraMan= bitacora_residuos_plaguicida::find($id);
 
        return view('BitacoraResiduosPlaguicidas.edit')->with('bitacoraMan',$bitacoraMan);

    }

    public function update(Request $request, $id)
    {

      //dd($request->all());
        $bitacoraMan = bitacora_residuos_plaguicida::find($id);
        $bitacoraMan->Fecha=$request['Fecha'];
        $bitacoraMan->NoProducto=$request['NoProducto'];
        $bitacoraMan->CantidadDesechos=$request['CantidadDesecho'];
        $bitacoraMan->DestinoFinal=$request['DestinoFinal'];
        $bitacoraMan->Observaciones=$request['Observaciones'];    
        $bitacoraMan-> save();


             //dd($userr);
         echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


      $bitacoraMan = bitacora_residuos_plaguicida::paginate(10);
        return view('BitacoraResiduosPlaguicidas.index')->with('bitacoraMan',$bitacoraMan);

        }


     public function indexx()
    {
        $bitacoraMan = bitacora_residuos_plaguicida::all();
        return view('BitacoraResiduosPlaguicidas.buscarRegistrosRP')->with('bitacoraMan',$bitacoraMan);
    }
    
}
 
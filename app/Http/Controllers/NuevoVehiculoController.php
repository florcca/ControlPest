<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nuevo_vehiculo;
use Illuminate\Support\Facades\DB;
use App\bita_vehiculo;


class NuevoVehiculoController extends Controller
{
    public function index()
    {
  
		$nuev_veh= nuevo_vehiculo::paginate(5);
        return view('Rendimiento-Combustible.index')->with('nuev_veh',$nuev_veh);
    }

    public function create(){

    	return view ('Rendimiento-Combustible.create');
    }

    public function store(Request $request)
    {
    	 \App\nuevo_vehiculo::create([
        'Marca'=>$request['Marca'],
        'Modelo'=>$request['Modelo'],
        'Num_serie'=>$request['Num_serie'],
        'Chofer'=>$request['Chofer']
              ]);


        echo '<script name="accion">alert("¡El vehículo ha sido guardado con éxito!") </script>';
      $nuev_veh = nuevo_vehiculo::paginate(5);
        return view('Rendimiento-Combustible.index')->with('nuev_veh',$nuev_veh);
    }



   public function indexx()
    {   
        $nuev_veh= nuevo_vehiculo::all();
        return view('Rendimiento-Combustible.indexx')->with('nuev_veh',$nuev_veh);
    }




    public function show($id){
        $por_veh = bita_vehiculo::where("id_vehiculo",$id)->get();
       for($c=0; $c<count($por_veh);$c++){
          $por_veh[$c]->delete();
       }
        $nuev_veh=nuevo_vehiculo::find($id);
    	$nuev_veh->delete();
		echo '<script name="accion">warning("Vehículo eliminado") </script>';

		$nuev_veh = nuevo_vehiculo::paginate(5);
        return view('Rendimiento-Combustible.index')->with('nuev_veh',$nuev_veh);

    }

 	public function edit($id)
    {
    	$nuev_veh=nuevo_vehiculo::find($id);

    	return view('Rendimiento-Combustible.edit')->with('nuev_veh',$nuev_veh);

    }

    public function update(Request $request, $id)
    {

	$nuev_veh = nuevo_vehiculo::find($id);

	$nuev_veh ->Marca=$request['Marca'];
	$nuev_veh ->Modelo=$request['Modelo'];
	$nuev_veh ->Num_serie=$request['Num_serie'];
	$nuev_veh ->Chofer=$request['Chofer'];
	$nuev_veh ->save();


	echo '<script name="accion">alert("¡El registro ha sido modificado con éxito!") </script>';


	$nuev_veh = nuevo_vehiculo::paginate(5);
    return view('Rendimiento-Combustible.index')->with('nuev_veh',$nuev_veh);
}


public function regBitaVehi($id)
{
    $bita_veh= DB::table('bita_vehiculos')->where('id_vehiculo', $id)->get();
    return view('Rendimiento-Combustible.buscarBitaXvehi')
    ->with('bita_veh',$bita_veh)
    ->with('id_vehiculo',$id);
}


    public function CrearRC(){
        return view ('Rendimiento-Combustible.createRC');
    }

}
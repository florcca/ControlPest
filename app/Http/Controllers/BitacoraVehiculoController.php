<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bita_vehiculo;
use Illuminate\Support\Facades\DB;

class BitacoraVehiculoController extends Controller
{

    public function index()
    {
        return hola;
		$bita_veh= bita_vehiculo::paginate(5);
        return view('Rendimiento-Combustible.BuscarBitacoraVehiculo')->with('bita_veh',$bita_veh);
    }

    public function create($id_vehiculo){
        return $id_vehiculo;
    }

    public function store(Request $request)
    {
        return"hola"; 
    }

    public function indexxx()
    { 
        $bita_veh = bita_vehiculo::all();
        return view('Rendimiento-Combustible.indexxx')->with('bita_veh',$bita_veh);
    }
  
    public function show($id_vehiculo){
        return view ('Rendimiento-Combustible.createRC')->with('id_vehiculo',$id_vehiculo);

    }
    public function nuevoparavehiculo(Request $request, $id_vehiculo){
    
        \App\bita_vehiculo::create([
        'Fecha'=>$request['Fecha'],
        'kiloinicial'=>$request['kiloinicial'],
        'kilofin'=>$request['kilofin'],
        'litros'=>$request['litros'],
        'importe'=>$request['importe'],
        'nota'=>$request['nota'],
        'observaciones'=>$request['observaciones'],
        'id_vehiculo'=>$id_vehiculo
      ]);
        echo '<script name="accion">alert("¡El registro ha sido guardado con éxito!") </script>';
        $bita_veh= DB::table('bita_vehiculos')->where('id_vehiculo', $id_vehiculo)->get();
        return view('Rendimiento-Combustible.buscarBitaXvehi')
    ->with('bita_veh',$bita_veh)
    ->with('id_vehiculo',$id_vehiculo);

    }
    }





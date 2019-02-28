<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Validator;
use Excel; 
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\DB;



class cargarFacturasExcelController extends Controller
{

	public function ExportUsuarios()
	{
		Excel::create('clients', function($excel){
			$excel -> sheet('clients', function($sheet){
				$sheet-> loadView('BitacoraMantenimientoEquipo\BuscarRegistrosME');
			});
		})->export('xlsx');
	}


	public function upload()
	{
		return view('tablafacturas\upload');
	}


	public function ImportClients()
	{
		$file =Input::file('file');
		$file_name =$file -> getClientOriginalName();
		$file -> move('files', $file_name);

		$results = Excel::load('files/'.$file_name, function($reader)
		{
			$reader -> all();



		})->get();

		for($c=0; $c<count($results);$c++){
			\App\User::create([
		      'name' => $results[$c]->name,
		      'apellidos'=> $results[$c]->apellidos,
		      'edad'=> $results[$c]->edad,
		      'numero'=> $results[$c]->numero,
		      'numero_emg'=> $results[$c]->numero_emg,
		      'domicilio'=> $results[$c]->domicilio,
		      'email'=> $results[$c]->email,
		      'password'=> $results[$c]->password
		    ]);
		}
		//return view('tablafacturas\clients', ['clients'=> $results]);
	}

    public function excel1_facturas(Request $request){
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
	   $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
       	    $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
		        
		        $hoja->each(function($fila) {
			        $usersemails=User::where("id","=",$fila->id)->first();
			        if(count( $usersemails)==0){
				      	$usuario=new User;
				        $usuario->id= $fila->id;
				        $usuario->name= $fila->name;
				        $usuario->apellidos= $fila->apellidos;
				        $usuario->edad= $fila->edad;
				        $usuario->numero= $fila->numero;
				        $usuario->numero_emg= $fila->numero_emg;
				        $usuario->domicilio= $fila->domicilio;
		                $usuario->email= $fila->email;
		                $usuario->password= $fila->password;
		                $usuario->save();
	                }
		     
		        });


            });
		return view('usuario.index');
    }
    else
    {
    	dd("jajajajaja error");
    }


}

}
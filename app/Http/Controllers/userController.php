<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Filesystem;
use Session;
use App\User;


class userController extends Controller
{
    //
  public function create(){

    $users = User:: orderBy('id', 'ASC')-> paginate(10);
    return view('usuario.index')->with('users',$users);
  }


  public function store(Request $request)
  {
    \App\User::create([
      'name' => $request['name'],
      'apellidos'=>$request['apellidos'],
      'edad'=>$request['edad'],
      'numero'=>$request['numero_contacto'],
      'numero_emg'=>$request['numero_emergencia'],
      'domicilio'=>$request['domicilio_usuario'],
      'email'=>$request['email'],
      'password'=>$request['password']
    ]);
    echo '<script name="accion">alert("¡El usuario ha sido guardado con éxito!") </script>';
    $users = User:: orderBy('id', 'ASC')-> paginate(10);
    return view('usuario.index')->with('users',$users);
    
  }

  public function index()
  {      
   return view('usuario.create');


 }

 public function destroy($id)
 { 
  $varUsuario = User::find($id);  
  $varUsuario -> delete();

  echo '<script name="accion">alert("¡El usuario ha sido eliminado con éxito!") </script>';
  $users = User:: orderBy('id', 'ASC')-> paginate(10);
  return view('usuario.index')->with('users',$users);


}

public function edit($id)
{
      //dd($user); 
 $user= User::find($id);
 
 return view('usuario.edit')->with('user',$user);
}



public function update(Request $request, $id)
{
      //dd($request->all());
 $userr= User::find($id);
 $userr->name = $request['name'];
 $userr->apellidos=$request['apellidos'];
 $userr->edad=$request['edad'];  
 $userr->numero=$request['numero_contacto'];  
 $userr->numero_emg=$request['numero_emergencia'];  
 $userr->domicilio=$request['domicilio_usuario'];  
 $userr->email=$request['email'];       
 $userr-> save();

     //dd($userr);
 echo '<script name="accion">alert("¡El usuario ha sido modificado con éxito!") </script>';
  $users = User:: orderBy('id', 'ASC')-> paginate(10);
  return view('usuario.index')->with('users',$users);

}


public function indexx()
{
    //return "hola pinche putito";
    $users = User::all();
    return view('usuario.usuariosCompletos')->with('users',$users);
}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function login(Request $request){
    if($request['username'] == '' or $request['password'] == '')
    {
      return view('auth.login');
    }
    else {
        $email=$request['username'];
        $contra=$request['password'];

        $usuario=DB::table('users')->where('email', $email)->get();
        try {
          if ($usuario[0]->email == $email && $contra == $usuario[0]->password)
          {
            return view('index');
          }
          else{
            echo '<script name="accion">alert("Usuario o contraseña incorrectos") </script>';
          return view('auth.login');
          }

        } catch (\Exception $e) {
          echo '<script name="accion">alert("Usuario o contraseña incorrectos") </script>';
          return view('auth.login');
        }





    }
}
}

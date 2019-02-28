<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Filesystem;
use Session;
class tablafacturasController extends Controller
{
 
     public function index()
     {     	
     	return view('tablafacturas.create');
     }
     public function create(){

     	return view('tablafacturas.index');
     }


}
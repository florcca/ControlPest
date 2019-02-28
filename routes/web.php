<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
}); 
Route::get('events', 'EventController@index');

Route::resource('/PDF_hoja1','ControladorPDF');
Route::resource('/PDF_hoja2','ControladordosPDF');
Route::resource('/PDF_hoja3','ControladortresPDF');
Route::post('/principal','LoginController@login')->name('login');
Route::get('/principal', function(){return view('index');});
Route::get('/acercade','acercadeController@index');
Route::resource('/bitacorquimico','bitacoraQuimicoController');
Route::resource('certificado','CertificadoController');
Route::resource('bitacoraRServicio','bitacoraRServicioController');
Route::resource('guardarFact','guardarFactController');


Route::resource('HojaServicio', 'HojaServicioController');

Route::get('BuscarCliente',['uses'=>'HojaServicioController@indexx','as'=>'HojaServicio.indexx']);




Route::group(['prefix' => 'admin'],function(){
Route::resource('users','userController');
Route::get('BuscarUsuario',[
'uses'=> 'userController@indexx',
'as'=> 'admin.users.indexx'
]);

Route::get('users/{id}/destroy',[
	'uses' => 'userController@destroy',
	'as' => 'admin.users.destroy'
]);


});
Route::resource('facturas','tablafacturasController');

Route::get('h2PDF','ControladordosPDF@index');
Route::get('certificadoPDF/{id}',['use'=>'CertificadoPDF@show','as'=>'certificadovehicular']); 




Route::post('excel1', 'cargarFacturasExcelController@excel1_facturas');

//genera excel con datos de la vista
Route::get('/ExportUsuarios', 'cargarFacturasExcelController@ExportUsuarios');
//sube excel
Route::get('/upload', 'cargarFacturasExcelController@upload');

Route::post('/ImportClients', 'cargarFacturasExcelController@ImportClients');




Route::resource('BitacoraMantenimientoEquipo', 'BitacoraMantenimientoEquipoController');

Route::get('BuscarRegistroME',['uses'=>'BitacoraMantenimientoEquipoController@indexx','as'=>'BitacoraMantenimientoEquipo.indexx']);
Route::get('exportarbme',['uses'=>'BitacoraMantenimientoEquipoController@ExportBME','as'=>'BitacoraMantenimientoEquipo.ExportBME']);


Route::resource('BitacoraControlQuimicosAlmacen', 'BitacoraControlQuimicosAlmacenController');
Route::get('BuscarRegistroQA',['uses'=>'BitacoraControlQuimicosAlmacenController@indexx','as'=>'BitacoraControlQuimicosAlmacen.indexx']);


Route::resource('BitacoraResiduosPlaguicidas', 'BitacoraResiduosPlaguicidasController');
Route::get('BuscarRegistroRP',['uses'=>'BitacoraResiduosPlaguicidasController@indexx','as'=>'BitacoraResiduosPlaguicidas.indexx']);



Route::get('CertificadoA', 'CertificadoAutoPDF@index');
 


Route::get('cqPDF','ControlqPDF@index');
Route::get('mePDF','ManEqPDF@index');
Route::get('rcPDF','CombustiblePDF@index');

Route::resource('pdfBitacoraMantenimientoEquipo','pdfBitacoraMantenimientoEquipoController');
Route::resource('pdfBCQuimicosAlmacen','pdfBCQAlmacenController');
Route::resource('pdfResiduosPlaguicidas','pdfResiduosPlaguicidasController');
Route::resource('pdfviaticos','pdfviaticosController');


Route::get('brpPDF','BitacoraResiduosController@index');
Route::get('bsPDF','BitacoraServeController@index');

//rutas de bitacora vehiculo
Route::resource('nuevovehi','NuevoVehiculoController');

Route::get('BuscarVehiculo',['uses'=>'NuevoVehiculoController@indexx','as'=>'nuevovehi.buscarvehiculo']);


Route::get('BitacoraXVehiculo/{id}',['uses'=>'NuevoVehiculoController@regBitaVehi','as'=>'nuevovehi.regBitaVehi']);

Route::get('CrearRC',['uses'=>'NuevoVehiculoController@CrearRC','as'=>'nuevovehi.CrearRC']);

Route::get('buscarBitacoraVehiculo',['uses'=> 'NuevoVehiculoController@buscarBitacoraVehiculo', 'as'=>'nuevovehi.buscarBitacoraVehiculo']);

Route::resource('bitacoravehiculo','BitacoraVehiculoController');
Route::post('bitacoravehiculoo/{id_vehiculo}',['uses'=>'BitacoraVehiculoController@nuevoparavehiculo','as'=>'nuevo.paravehiculo']);
Route::get('BuscarRegisVehiculo',['uses'=>'BitacoraVehiculoController@indexx','as'=>'BuscarRegistroXvehiculo.indexx']);



//rutas para formato de viaticos
Route::resource('formatoViaticos', 'formatoViaticosController');
Route::get('BuscarFViaticos',['uses'=>'formatoViaticosController@indexx','as'=>'BuscarViaticos.indexx']);



//rutas para ceritificado de fumigacion vehicular
Route::resource('CertificadoVehicular', 'CertificadoVehicularController' );
Route::get('BuscarCertificadoVehicular',['uses'=>'CertificadoVehicularController@indexx','as'=>'certificado_vehicular.indexx']);


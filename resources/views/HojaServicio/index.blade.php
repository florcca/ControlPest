@extends('template.main')


@section('titulo')
Clientes
@endsection
@section('contenido')


<center>
<div>
<h1>Lista de clientes</h1>
</div>
</center>





  <script src="{{ asset('plugins/Bootstrap/js/busquedaTabla.js')}}"></script>



  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="tablausuarios.css">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <div>
    <div class="container">
      <div class="row">

        <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                
      <div class="col col-xs-6">
        <h3 class="panel-title">Solicitud de servicio</h3>
      </div>
      <div class="col col-xs-6 text-right">
       <a class ="btn btn-sm btn-primary btn-create" href="{{ route('HojaServicio.create')}}"><em class="glyphicon glyphicon-list-alt"></em>  Nueva solicitud de servicio</a>
       <a class ="btn btn-sm btn-success btn-create" href="{{ route('HojaServicio.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar cliente</a>
     </div>
   </div>
 </div>

 <div class="panel-body">

  <table class="table table-striped table-bordered table-list", style=width="100">
    <thead>
      <tr>
        <center><th class="hidden-xs">Id</th></center>
        <center><th >Nombre</th></center>
        <center><th >Domicilio</th></center>
        <center><th >Ciudad</th></center>
        <center><th >Teléfono</th></center>
        <center><th >Lugar aplicación</th></center>
        <center><th >Responsable</th></center>
        <center><th >Fecha</th></center>
        <center><th >{{-- <em class="fa fa-cog"></em> --}}</th></center>
        <center><th >{{-- <em class="glyphicon glyphicon-save"></em> --}}</th></center>
      </tr> 

    </thead>
    @foreach($hojaser as $hojaservicio)
    <tbody>
      <tr>
       <td class="hidden-xs">{{$hojaservicio->id}}</td>
       <td>{{$hojaservicio->nombre}}</td>
       <td>{{$hojaservicio->domicilio}}</td>
       <td>{{$hojaservicio->ciudad}}</td>
       <td>{{$hojaservicio->telefono}}</td>
       <td>{{$hojaservicio->lugar_de_aplicacion}}</td>
       <td>{{$hojaservicio->responsable}}</td>
       <td>{{$hojaservicio->fecha}}</td>


       <td align="center">
        <a href="{{ route('HojaServicio.edit', ['id' => $hojaservicio->id])}}"  onclick=confirmUpdate(event) class="btn btn-default" " title="Editar solicitud de servicio"><em class="fa fa-pencil"></em></a>
        <a href="{{ route('HojaServicio.destroy', ['id' => $hojaservicio->id])}}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar solicitud de servicio"><em class="fa fa-trash "></em></a>
      </td>

       <td align="center">

        <a  href="{{ route('PDF_hoja1.show', ['id' => $hojaservicio->id])}}" class="btn btn-success" " title="Mostrar solicitud de servicio"><em class="glyphicon glyphicon-print"></em></a> 
        <a   href="{{ route('PDF_hoja2.show', ['id' => $hojaservicio->id])}}"class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>
        <a   href="{{ route('PDF_hoja3.show', ['id' => $hojaservicio->id])}}"  class="btn btn-warning" " title="Certificado de fumigación"><em class="glyphicon glyphicon-check "></em></a>






      </td>


                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
{!! $hojaser->render()!!}
        </div>
      </div>
    </div>
  </div>

  </div>

<script>
        function confirmDelete(event) {
        var result = confirm('¿Seguro que quieres borrar este cliente?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }

        function confirmUpdate(event) {
        var result = confirm('¿Seguro que quieres actualizar este cliente?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }


    </script>


@endsection
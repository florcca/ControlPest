@extends('template.main')


@section('titulo')
Clientes
@endsection
@section('contenido')


<center>
<div>
<h1>Lista de clientes - vehículos </h1>
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
       <a class ="btn btn-sm btn-primary btn-create" href="{{ route('CertificadoVehicular.create')}}"><em class="glyphicon glyphicon-list-alt"></em>  Nueva solicitud de servicio</a>
       <a class ="btn btn-sm btn-success btn-create" href="{{ route('certificado_vehicular.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar cliente</a>
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
        <center><th >Empresa</th></center>
        <center><th >Tipo de vehículo</th></center>
        <center><th >Fecha de fumigación</th></center>
        <center><th >{{-- <em class="fa fa-cog"></em> --}}</th></center>
        <center><th >{{-- <em class="glyphicon glyphicon-save"></em> --}}</th></center>
      </tr> 

    </thead>
    @foreach($certificado as $certi)
    <tbody>
      <tr>
          <td>{{$certi->id}}</td>
          <td>{{$certi->nombre}}</td>
          <td>{{$certi->domicilio}}</td>
          <td>{{$certi->ciudad}}</td>
          <td>{{$certi->empresa}}</td>
          <td>{{$certi->tipo_v}}</td>
          <td>{{$certi->fecha_fumigacion}}</td>
          

          <td align="center">
        <a href="{{ route('CertificadoVehicular.edit', ['id' => $certi->id])}}" onclick=confirmUpdate(event) class="btn btn-default" " title="Editar registro en la bitácora de mantenimiento"><em class="fa fa-pencil"></em></a>
        <a href="{{ route('CertificadoVehicular.show', ['id' => $certi->id])}}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar registro en la bitácora de mantenimiento"><em class="fa fa-trash "></em></a>
      </td>

       <td align="center">

         <a  href="{{ route('certificadovehicular', ['id' => $certi->id])}}" class="btn btn-success" " title="Mostrar solicitud de servicio"><em class="glyphicon glyphicon-print"></em></a>  
      

      </td>

       

                </tr>
              </tbody>
              @endforeach

            </table>
          </div>
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
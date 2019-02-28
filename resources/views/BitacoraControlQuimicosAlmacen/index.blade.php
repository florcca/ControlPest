@extends('template.main')


@section('titulo')
Control de químicos en almacén
@endsection
@section('contenido')


<center>
<div>
<h1>Control de químicos en almacén</h1>
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
                  <h3 class="panel-title">Control de químicos en almmacen</h3>
                </div>
                <div class="col col-xs-6 text-right">
       <a class ="btn btn-sm btn-primary btn-create" href="{{ route('BitacoraControlQuimicosAlmacen.create')}}"><em class="glyphicon glyphicon-list-alt"></em>   Nuevo</a>
       <a class ="btn btn-sm btn-success btn-create" href="{{ route('BitacoraControlQuimicosAlmacen.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar registros</a>
     </div>
   </div>
 </div>

 <div class="panel-body">

  <table class="table table-striped table-bordered table-list">
    <thead>
      <tr>
        <center><th>Id</th></center>
        <center><th>Nombre Comercial</th></center>
        <center><th>Numero de registro unico</th></center>
        <center><th>Nombre del ingrediente activo</th></center>
        <center><th>Fecha de emision del registro</th></center>
        
        <center><th> {{-- <em class="fa fa-cog"></em> --}}</th></center>
        
      </tr> 

    </thead>
    @foreach($bitacoraMan as $bitacoraMantenimiento)
    <tbody>   
      <tr>
          <td>{{$bitacoraMantenimiento->id}}</td>
          <td>{{$bitacoraMantenimiento->NombreComercial}}</td>
          <td>{{$bitacoraMantenimiento->NoRegistroUnico}}</td>
          <td>{{$bitacoraMantenimiento->NombreIngredienteActivo}}</td>
          <td>{{$bitacoraMantenimiento->FechaEmision}}</td>
       

          <td align="center">
        <a href="{{ route('BitacoraControlQuimicosAlmacen.edit', ['id' => $bitacoraMantenimiento->id])}}" onclick=confirmUpdate(event) class="btn btn-default" " title="Editar registro"><em class="fa fa-pencil"></em></a>
        <a href="{{ route('BitacoraControlQuimicosAlmacen.show', ['id' => $bitacoraMantenimiento->id])}}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar registro"><em class="fa fa-trash "></em></a>
      </td>

      

       

                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
{!! $bitacoraMan->render()!!}
        </div>
      </div>
    </div>
  </div>

  </div>



<script>
        function confirmDelete(event) {
        var result = confirm('¿Seguro que quieres borrar este registro?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }

        function confirmUpdate(event) {
        var result = confirm('¿Seguro que quieres actualizar este registro?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }


</script>



@endsection
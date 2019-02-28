  @extends('template.main')


  @section('titulo')
  Residuos de plaguicidas
  @endsection
  @section('contenido')


  <center>
    <div>
      <h1>Residuos de plaguicidas</h1>
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
                  <h3 class="panel-title">Residuos de plaguicidas</h3>
                </div>
                <div class="col col-xs-6 text-right">

         <a class ="btn btn-sm btn-primary btn-create" href="{{ route('BitacoraResiduosPlaguicidas.create')}}"><em class="glyphicon glyphicon-list-alt"></em>   Nuevo</a>
         <a class ="btn btn-sm btn-success btn-create" href="{{ route('BitacoraResiduosPlaguicidas.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar registros</a>
       </div>
     </div>
   </div>
   <div class="panel-body">
    <table  class="table table-striped table-bordered table-list">
      <thead>
        <tr>
          <center><th>Id</th></center>
          <center><th>Fecha</th></center>
          <center><th>No. de producto</th></center>
          <center><th>Cantidad de desechos</th></center>
          <center><th>Destino final</th></center>
          <center><th>Observaciones</th></center>
          
          <center><th>{{-- <em class="fa fa-cog"></em> --}}</th></center>
          
        </tr> 

      </thead>
      @foreach($bitacoraMan as $bitacoraMantenimiento)
      <tbody>        
        <tr>
            <td>{{$bitacoraMantenimiento->id}}</td>
            <td>{{$bitacoraMantenimiento->Fecha}}</td>
            <td>{{$bitacoraMantenimiento->NoProducto}}</td>
            <td>{{$bitacoraMantenimiento->CantidadDesechos}}</td>
            <td>{{$bitacoraMantenimiento->DestinoFinal}}</td>
            <td>{{$bitacoraMantenimiento->Observaciones}}</td>
         

            <td align="center">
          <a href="{{ route('BitacoraResiduosPlaguicidas.edit', ['id' => $bitacoraMantenimiento->id])}}" onclick=confirmUpdate(event) class="btn btn-default" " title="Editar solicitud de servicio"><em class="fa fa-pencil"></em></a>
          <a href="{{ route('BitacoraResiduosPlaguicidas.show', ['id' => $bitacoraMantenimiento->id])}}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar solicitud de servicio"><em class="fa fa-trash "></em></a>
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
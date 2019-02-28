@extends('template.main')


@section('titulo')
Bitácora viáticos
@endsection
@section('contenido')


<center>
<div>
<h1>Bitácora viáticos</h1>
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
        <h3 class="panel-title">Bitácora viáticos</h3>
      </div>
      <div class="col col-xs-6 text-right">
       <a class ="btn btn-sm btn-primary btn-create" href="{{ route('formatoViaticos.create')}}"><em class="glyphicon glyphicon-list-alt"></em>   Nuevo</a>
       <a class ="btn btn-sm btn-success btn-create" href="{{ route('BuscarViaticos.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar registros</a>
     </div>
   </div>
 </div>

 <div class="panel-body">

  <table class="table table-striped table-bordered table-list", style=width="100">
    <thead>
      <tr>
        <center><th style="width:22%" nowrap>Ruta</th></c enter>
        <center><th style="width:15%" nowrap>Técnico</th></center>
        <center><th style="width:12%" nowrap>Fecha</th></center>
        <center><th style="width:10%" nowrap>Fondo</th></center>
        <center><th style="width:10%" nowrap>Gastos</th></center>
        <center><th style="width:10%" nowrap>Total</th></center>
        <center><th style="width:30%" nowrap><em class="fa fa-cog"></em></th></center>
        {{-- <center><th style="width:30%" nowrap><em class="glyphicon glyphicon-save"></em></th></center> --}}
      </tr> 

    </thead>
    @foreach($viaticos as $viatico)
        <tbody>
          <tr>
                    <td>{{$viatico->ruta}}</td>
                    <td>{{$viatico->tecnico}}</td>
                    <td>{{$viatico->fecha}}</td>
                    <td>{{$viatico->fondo}}</td>
                    <td>{{$viatico->comida+$viatico->gasolina+$viatico->hotel+$viatico->extra}}</td>
                    <td>{{$viatico->fondo-($viatico->comida+$viatico->gasolina+$viatico->hotel+$viatico->extra)}}</td>
                    <td align="center">
                      <a href="{{ route('formatoViaticos.edit', $viatico->id ) }}"" onclick=confirmUpdate(event) class="btn btn-default" " title="Editar registro de viáticos"><em class="fa fa-pencil"></em></a>
                      <a href="{{ route('formatoViaticos.show', $viatico->id ) }}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar registro de viáticos"><em class="fa fa-trash "></em></a>
                    </td>


       

                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
          {!! $viaticos -> render() !!}
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
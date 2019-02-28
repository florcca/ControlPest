@extends('template.main')

@section('titulo')
Buscar en bitácora de vehículos
@endsection
@section('contenido')

  <style>
  
  button {
    border: none;
    background: #72bd68c9;
    color: #f2f2f2;
    padding: 10px;
    font-size: 18px;
    border-radius: 5px;
    position: relative;
    box-sizing: border-box;
    transition: all 500ms ease; 
  }
  
  button{ 
    padding: 10px 35px;  
    overflow:hidden;
  }

  button:before {

content: "\f02f";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
/*--adjust as necessary--*/
    color: #000;
    font-size: 18px;
    padding-right: 0.5em;
    left: 0;


    position: absolute;
    top: 11px;
    left: -30px;
    transition: all 200ms ease;
  }

  button:hover:before {
    left: 7px;
  }
  
  
  </style>
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<center>
  <div>
    <h1><em class="glyphicon glyphicon-search"></em>     Buscar en bitácora de vehículos </h1>
  </div>
</center>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link rel="stylesheet" href="tablausuarios.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="estilosTablaBusqueda.css">

<body>
 {!! Form::open(['route'=>'pdfBitacoraMantenimientoEquipo.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}



<div class="container">
  <div class="row">
      <div class="col-md-9">

  <input name="buscador" class="form-control" id="myInput" type="text" placeholder="Buscar...">
</div>


<div class="col-md-2">

      <center><button type="submit">Imprimir</button></center>
{!!Form::close()  !!}

</div>
</div>

  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <center><th style="width:10%" nowrap>Id</th></center>
        <center><th style="width:22%" nowrap>Marca</th></center>
        <center><th style="width:15%" nowrap>Modelo</th></center>
        <center><th style="width:12%" nowrap>Número de serie</th></center>
        <center><th style="width:10%" nowrap>Choferrrrrr</th></center>
        <center><th style="width:30%" nowrap>{{-- <em class="fa fa-cog"></em> --}}</th></center>
      </tr> 
    </thead>
      @foreach($bita_veh as $nv)
    <tbody id="myTable">
      <tr>
          <td>{{$nv->id}}</td>
          <td>{{$nv->Marca}}</td>
          <td>{{$nv->Modelo}}</td>
          <td>{{$nv->Num_serie}}</td>
          <td>{{$nv->Chofer}}</td>

          <td align="center">
        <a href="{{ route('BitacoraMantenimientoEquipo.edit', ['id' => $nv->id])}}" onclick=confirmUpdate(event) class="btn btn-default" " title="Editar registro de bitácora de mantenimiento"><em class="fa fa-pencil"></em></a>
        <a href="{{ route('BitacoraMantenimientoEquipo.destroy', ['id' => $nv->id])}}" onclick=confirmDelete(event) class="btn btn-danger" " title="Eliminar registro de bitácora de mantenimiento"><em class="fa fa-trash "></em></a>
      
        <a href="{{ route('nuevovehi.regBitaVehi')}}"  class="btn btn-warning" " title="Abrir bitácora del vehículo"><em class="glyphicon glyphicon-list-alt"></em></a>

      </td>

      
      </tr>
    </tbody>
     @endforeach
  </table>
  </div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



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

</body>

@endsection


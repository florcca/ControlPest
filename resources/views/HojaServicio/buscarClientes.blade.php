@extends('template.main')


@section('titulo')
Buscar clientes
@endsection
@section('contenido')

<center>
  <div>
    <h1><em class="glyphicon glyphicon-search"></em>     Buscar clientes </h1>
  </div>
</center>

<link rel="stylesheet" href="estilosTablaBusqueda.css">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

</head>
<body>




<div class="container">
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <center><th>ID</th></center>
        <center><th style="width:22%" nowrap>Nombre</th></center>
        <center><th style="width:15%" nowrap>Domicilio</th></center>
        <center><th style="width:12%" nowrap>Ciudad</th></center>
        <center><th style="width:10%" nowrap>Teléfono</th></center>
        <center><th style="width:10%" nowrap>Lugar aplicación</th></center>
        <center><th style="width:10%" nowrap>Responsable</th></center>
        <center><th style="width:10%" nowrap>Fecha</th></center>
        <center><th style="width:30%" nowrap><em class="fa fa-cog"></em></th></center>
        <center><th style="width:30%" nowrap><em class="glyphicon glyphicon-save"></em></th></center>
      </tr> 

    </thead>
    @foreach($hojaser as $hojaservicio)
    <tbody id="myTable">
      <tr>
       <td>{{$hojaservicio->id}}</td>
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
        <a   href="{{ url('/h2PDF')}}"class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>
        <a   href="{{ url('certificadoPDF')}}"  class="btn btn-warning" " title="Certificado de fumigación"><em class="glyphicon glyphicon-check "></em></a>

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
        var result = confirm('¿Seguro que quieres borrar este cliente?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }

        function confirmUpdate(event) {
        var result = confirm('¿Seguro que quieres jajajajaajajaj este cliente?');

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


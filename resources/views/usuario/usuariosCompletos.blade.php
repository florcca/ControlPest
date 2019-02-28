@extends('template.main')


@section('titulo')
Buscar usuarios
@endsection
@section('contenido')

<center>
  <div>
    <h1><em class="glyphicon glyphicon-search"></em>     Buscar usuarios </h1>
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
                <center><th>Nombre</th></center>
                <center><th>Apellidos</th></center>
                <center><th>Edad</th></center>
                <center><th>Celular</th></center>
                <center><th>Emergencia</th></center>
                <center><th>Domicilio</th></center>
                <center><th>Email</th></center>
                <center><th><em class="fa fa-cog"></em></th></center>                    
              </tr> 
    </thead>
    @foreach($users as $usuario)
    <tbody id="myTable">
      <tr>
        <td >{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->apellidos}}</td>
        <td>{{$usuario->edad}}</td>
        <td>{{$usuario->numero}}</td>
        <td>{{$usuario->numero_emg}}</td>
        <td>{{$usuario->domicilio}}</td>
        <td>{{$usuario->email}}</td>
        <td align="center">
          <a href="{{ route('users.edit', $usuario->id ) }}"  onclick=confirmUpdate(event) class="btn btn-default"><em class="fa fa-pencil"></em></a>
          <a href="{{ route('admin.users.destroy', $usuario->id ) }}"  onclick=confirmDelete(event)    class="btn btn-danger"><em class="fa fa-trash "></em></a>
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
        var result = confirm('¿Seguro que quieres borrar este usuario?');

        if (result) {
                return true;
            } else {
                event.preventDefault();
                return false;
            }
          }

        function confirmUpdate(event) {
        var result = confirm('¿Seguro que quieres actualizar este usuario?');

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


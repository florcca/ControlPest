  @extends('template.main')


  @section('titulo')
  Lista de usuarios
  @endsection
  @section('contenido')

  <center>
    <div>
      <h1>Lista de usuarios </h1>
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
                  <h3 class="panel-title">Usuarios</h3>
                </div>
                <div class="col col-xs-6 text-right">

                 <a class ="btn btn-sm btn-primary btn-create" href="{{ route('users.index')}}"><em class="glyphicon glyphicon-user"></em>  Nuevo usuario</a>


                 <a class ="btn btn-sm btn-success btn-create" href="{{ route('admin.users.indexx')}}"><em class="glyphicon glyphicon-search"></em>  Buscar usuario</a>
               </div> 
             </div>
           </div>
           <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                  <center><th class="hidden-xs">Id</th></center>
                  <center><th>Nombre</th></center>
                  <center><th>Apellidos</th></center>
                  <center><th>Edad</th></center>
                  <center><th>Celular</th></center>
                  <center><th>Emergencia</th></center>
                  <center><th>Domicilio</th></center>
                  <center><th>Email</th></center>
                  <center><th>{{-- <em class="fa fa-cog"></em> --}}</th></center>                    
                </tr> 
              </thead>
              @foreach($users as $usuario)
              <tbody>
                <tr>
                  <td class="hidden-xs">{{$usuario->id}}</td>
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
          {!! $users -> render() !!}
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
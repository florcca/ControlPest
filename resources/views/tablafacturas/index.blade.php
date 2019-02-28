@extends('template.main')
@section('titulo')
Cargar archivos
@endsection
@section('contenido')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="tablausuarios.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<center>
  <div>
    <h1>Cargar excel </h1>
  </div>
</center>
 

<div>
  <div class="container">
    <div class="row">

      <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">


            </div>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                  <center><th COLSPAN="2">Agregar Excel 1</th></center>

                </tr> 
              </thead>
              <tbody>
                <tr>
                  <td>
{{--                      {!! Form::open(['url'=>'excel1','method'=>'POST']) !!} --}}
                  <form id="f_cargar_datos_usuarios" name="f_cargar_datos_usuarios" method="post" action="excel1" class="formarchivo" enctype="multipart/form-data">
                    <div class="container col col-xs-12 text-right">

                      
                      <div class="input-group input-file" name="Fichier1">
                        <span class="input-group-btn">
                          <button class="btn btn-default btn-choose" type="button">Buscar archivo</button>
                        </span>

                        <input type="text" class="form-control" placeholder='Seleccione el archivo...' />

                        <span class="input-group-btn">
                         <button class="btn btn-danger btn-reset" type="button"><em class="glyphicon glyphicon-trash"></em>   Eliminar</button>
                       </span>

                     <td class="text-center"><button type="submit" class="btn btn-warning"><em class="glyphicon glyphicon-circle-arrow-up"></em>   Cargar excel 1</button></td>
{{--                         {!!Form::close()  !!}

 --}}               
                      </form>     
                    </div>
                  </div>
                  </div>
                </td>
                <tr>
                  <center><th COLSPAN="2">Agregar excel 2</th></center>
                </tr>
                <td>
                  <div class="container col col-xs-12 text-right">

                    <div class="input-group input-file" name="Fichier1">
                      <span class="input-group-btn">
                        <button class="btn btn-default btn-choose" type="button">Buscar archivo</button>
                      </span>
                      <input type="text" class="form-control" placeholder='Seleccione el archivo...' />
                      <span class="input-group-btn">
                       <button class="btn btn-danger btn-reset" type="button"><em class="glyphicon glyphicon-trash"></em>   Eliminar</button>
                     </span> 
                     <td class="text-center"><button type="submit" class="btn btn-warning"><em class="glyphicon glyphicon-circle-arrow-up"></em>   Cargar excel 2</button></td>
                   </div>
                 </div>
               </tr>

               <tr>
                <td COLSPAN="2" class="text-center "><button type="submit" class="btn btn-success"><em class="glyphicon glyphicon-transfer"></em>   Comparar</button></td>
              </tr>
            </tbody>

          </table>
        </div>

      </div>
    </div>
  </div>
</div>

</div>



<script>
  function bs_input_file() {
  $(".input-file").before(
    function() {
      if ( ! $(this).prev().hasClass('input-ghost') ) {
        var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
        element.attr("name",$(this).attr("name"));
        element.change(function(){
          element.next(element).find('input').val((element.val()).split('\\').pop());
        });
        $(this).find("button.btn-choose").click(function(){
          element.click();
        });
        $(this).find("button.btn-reset").click(function(){
          element.val(null);
          $(this).parents(".input-file").find('input').val('');
        });
        $(this).find('input').css("cursor","pointer");
        $(this).find('input').mousedown(function() {
          $(this).parents('.input-file').prev().click();
          return false;
        });
        return element;
      }
    }
  );
}
$(function() {
  bs_input_file();
});

$(document).on("submit",".formarchivo",function(e){

    
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");


        var seccion_sel=  $("#seccion_seleccionada").val();
        if(nombreform=="f_cargar_datos_usuarios" ){ var miurl="excel1_facturas";  }


        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);

                 if(rs ){
                         $('#'+nombreform+'').trigger("reset");
                         mostrarseccion(seccion_sel);
                        }             
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }
        });

irarriba();

});




</script>
  @endsection
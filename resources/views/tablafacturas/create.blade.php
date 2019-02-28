


@extends('template.main')
@section('titulo')
Facturas
@endsection
@section('contenido')



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<center>
  <div>
      <h1>Facturas</h1>
  </div>
</center>


<style>

th {
    background: #FFDA91;       
}
#contenedor {
    margin: 40px auto;
    width: 1050px;  /* Ancho del contenedor */
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

#contenedor input {
    height: 32px;
    visibility: hidden;
}

#contenedor label {
    float: left;
    cursor: pointer;
    font-size: 17px;  /* Tamaño del texto de las pestañas */
    line-height: 40px;
    height: 40px;
    padding: 0 20px;
    display: block;
    color: #888;  /* Color del texto de las pestañas */
    text-align: center;
    border-radius: 5px 5px 0 0;
    background: #eee;  /* Fondo de las pestañas */
    margin-right: 5px;
}

#contenedor input:hover + label {
    background: #ddd;  /* Fondo de las pestañas al pasar el cursor por encima */
    color: #666;  /* Color del texto de las pestañas al pasar el cursor por encima */
}

#contenedor input:checked + label {
    background: #b0eca8 ;  /* Fondo de las pestañas al presionar #FFDA91*/
    color: #444; /* Color de las pestañas al presionar */
    z-index: 6;
    line-height: 45px;
    height: 45px;
    position: relative;
    top: -5px;
    -webkit-transition: .1s;
    -moz-transition: .1s;
    -o-transition: .1s;
    -ms-transition: .1s;
}

.content {
    background: #b0eca8;  /* Fondo del contenido */
    position: relative;
    width: 100%;
    height: 400px;  /* Alto del contenido */
    padding: 30px;
    z-index: 5;
    border-radius: 0 5px 5px 5px;
}

.content div {
    position: absolute;
    z-index: -100;
    opacity: 0;
    transition: all linear 0.1s;
}

#contenedor input.tab-selector-1:checked ~ .content .content-1,
#contenedor input.tab-selector-2:checked ~ .content .content-2,
#contenedor input.tab-selector-3:checked ~ .content .content-3,
#contenedor input.tab-selector-4:checked ~ .content .content-4 {
    z-index: 100;
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    -moz-transition: all ease-out 0.2s 0.1s;
    -o-transition: all ease-out 0.2s 0.1s;
    -ms-transition: all ease-out 0.2s 0.1s;
} 


/* TABLAAAA */


.panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
    opacity: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

    /*
    used to vertically center elements, may need modification if you're not using default sizes.
    */
    .panel-table .panel-footer .col{
     line-height: 34px;
     height: 34px;
 }

 .panel-table .panel-heading .col h3{
     line-height: 30px;
     height: 30px;
 }

 .panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}



th {
    text-align: center;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="row">

  <div class="col-md-10 col-md-offset-1">

    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">

          <div class="col col-xs-6">
            <h3 class="panel-title">Facturas</h3>
        </div>
        <div class="col col-xs-6 text-right">

           <a class ="btn btn-sm btn-primary btn-create" href="{{ url('upload')}}"><em class="
glyphicon glyphicon-folder-close"></em>  Nueva Factura </a>
       </div>
   </div>
</div>
<div >

    <!------ Aqui se mete el contenedor a la tabla ---------->

    <div id="contenedor">
        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
        <label for="tab-1" class="tab-label-1">Todas</label>

        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
        <label for="tab-2" class="tab-label-2">Pagadas</label>

        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
        <label for="tab-3" class="tab-label-3">Por pagar</label>

        <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
        <label for="tab-4" class="tab-label-4">Atrasadas</label>

        <div class="content">
                            <!------ Aqui se empiezan a meter las tablas a la pestaña contenedora ---------->

            <div class="content-1">

                <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <center><th >ID</th></center>
                            <center><th ><em class="glyphicon glyphicon-save"></em></th></center>
                        </tr> 

                    </thead>
                    <tbody>

                        <tr>
                            <td>Tabla - Pestaña1</td>

                            <td align="center">

                                <a href="" class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>

                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <div class="content-2">
                            <!------ Aqui se empiezan a meter las tablas a la pestaña contenedora ---------->

                <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <center><th class="hidden-xs">ID</th></center>
                            <center><th ><em class="glyphicon glyphicon-save"></em></th></center>
                        </tr> 

                    </thead>
                    <tbody>

                        <tr>
                            <td>Tabla - Pestaña 2</td>

                            <td align="center">

                                <a href="" class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="content-3">
                                <!------ Aqui se empiezan a meter las tablas a la pestaña contenedora ---------->

                <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <center><th class="hidden-xs">ID</th></center>
                            <center><th ><em class="glyphicon glyphicon-save"></em></th></center>
                        </tr> 

                    </thead>
                    <tbody>

                        <tr>
                            <td>Tabla - Pestaña 3</td>

                            <td align="center">

                                <a href="" class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="content-4">
                <!------ Aqui se empiezan a meter las tablas a la pestaña contenedora ---------->
                <table class="table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <center><th class="hidden-xs">ID</th></center>
                            <center><th ><em class="glyphicon glyphicon-save"></em></th></center>
                        </tr> 

                    </thead>
                    <tbody>

                        <tr>
                            <td>Tabla - Pestaña 4</td>

                            <td align="center">

                                <a href="" class="btn btn-secondary" " title="Mostrar hoja de servicio"><em class="glyphicon glyphicon-file"></em></a>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>








</div>

</div>
</div>
</div>



@endsection


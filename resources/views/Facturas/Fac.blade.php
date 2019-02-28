

<html>
	<head>
		<title>Facturas</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
				  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script src="jspdf/dist/jspdf.min.js"></script>
    <script src="jspdf.plugin.autotable.min.js"></script>

		<?php 
    session_start();
    ?>
		<style type="text/css">
			
			body
			{
				margin:0;
				padding:0;
				background-color:white;
			}
			.box
			{
				width:1050px;
				padding:10px;
				background-color:#fff;
				border:0px solid #ccc;
				border-radius:5px;
				margin-top:0px;
			}
		</style>
	</head>
	<body>
		<div class="container box">
			<strong><h1 style="font-family:FontAwesome; font-size:50px; color: #212F3D; " align="center">Facturas</h1></strong>
			<br />
			<div class="table-responsive">
				<br />
				<form action="indexx" method="post">
				<div align="left" >
					<label>Ingrese la fecha</label>
					<input  type="date" name="fecha1" id="fecha1" style="width:200px;height:30px  " />

					<label>Ingrese la fecha</label>
					<input type="date" name="fecha2" id="fecha2" style="width:200px;height:30px"  />
					
					<button type="button" name="abutton" style="background:green;border-color: green; height: 40px; width: 80 "  class="btn btn-warning btn-xs abutton">OK</button>
					
				</div>
			</form>

				<div align="right">
				
				<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Agregar</button>
				<button type="imprime" name="imprime"   class="btn btn-info btn-lg imprime">Generar PDF</button>
				</div>


		
				
			</div>
		</div>
	</body>
</html>


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Agregar</h4>
				</div>
				<div class="modal-body">
					<label id="folio">Folio</label>
					<input disabled title="Ingresa letras" type="text"  name="folio" id="folio" class="form-control" required="" />
					<br />
					<label id="nombre">Nombre:</label>
					<input disabled title="Ingresa letras" type="nombre" name="nombre" id="nombre" class="form-control" required=""/>
					<br />
					<label id="fecha">Fecha:</label>
					<input disabled title="" type="fecha" name="fecha" id="fecha" class="form-control" />
					<br />
				
		
				
		</form>
	</div>
</div>



<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Agregar Sucursal");
		$('#action').val("Agregar");
		$('#operation').val("Add");
	});
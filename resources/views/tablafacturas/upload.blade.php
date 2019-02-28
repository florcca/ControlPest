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



<head>
	<meta charset="UTF-8">
	<title>upload</title>
</head>
<body>



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
											<form action="ImportClients" method="post" enctype="multipart/form-data">
												<div class="container col col-xs-12 text-right">


													<div class="input-group input-file" name="Fichier1">
														<span class="input-group-btn">
															<button class="btn btn-default btn-choose" disabled="" type="button"><em class="glyphicon glyphicon-folder-open"></em></button>
														</span>
														<input type="file" name="file" class="form-control btn btn-default btn-choose" placeholder='Seleccione el archivo...' />

														<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
														<span class="input-group-btn">
														</span>

														<td class="text-center"><button type="submit" class="btn btn-warning" name=Upload><em class="glyphicon glyphicon-circle-arrow-up"></em>   Cargar usuarios</button></td>
													</form>
												</div>
											</div>

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
</body>




<script>
	
</script>

  @endsection
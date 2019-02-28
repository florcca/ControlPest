<!DOCTYPE html>
<html lang="es" style="  min-height: 100%;
  position: relative;">
<head>
	<meta charset="UTF-8">

	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/estilos.css')}}">
	<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.min.css')}}">


</head>
<body style="  margin: 0;
  margin-bottom: 40px;">
	<header>

		<section id="cover bg-white">
						<div id="cover-texto bg-white">
							<!--div class="container bg-dark"-->
								<div class="bg-white">
								<div class="row bg-white">
									<div class="col-sm-15 bg-white">
										<img src="plugins/Bootstrap/img/encabezado.png" style="max-width:100%;width:auto;height:auto;">
									</div>
								</div>
							</div>
						</div>
						<div class="topnav" id="myTopnav">
						 <a href="{{ url('principal') }}" class="active">Inicio</a>
						 <a href="{{ route('users.create')}}">Usuarios</a>
						 <a href="{{ route('facturas.index')}}">Facturas</a>
						 {{--<a href="{{ url('HojaServicio')}}">Clientes</a>--}}
						 

						 <div>
            	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
               Solicitudes de fumigación
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" >

             <h5> <a class="dropdown-item" style="color:#050200"  href="{{url('HojaServicio')}}">Casa-habitación/Establecimiento</a></h5>
					  <h5> <a class="dropdown-item" style="color:#050200"  href="{{ url('CertificadoVehicular')}}">Vehícular</a></h5>


             </div>

             	</div>











						 {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Nuevo servicio
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">





             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('HojaServicio.create')}}">Solicitud de servicio</a></h5>

             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ url('pdf')}}">Hoja de servicio</a></h5>

             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('guardarFact.create')}}">Control de envío de facturas</a></h5>

             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('bitacoraRServicio.create')}}">Bitácora de Servicio</a></h5>


             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('bitacorquimico.create')}}">Bitácora de Químico</a></h5>

             	<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('certificado.create')}}">Certificado de Fumigación</a></h5>
            
             </div> --}}




            	<div>
             			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
               Bitácoras
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" >

             <h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('BitacoraMantenimientoEquipo.index')}}">Bitácora de mantenimiento de equipo</a></h5>


<h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('BitacoraControlQuimicosAlmacen.index')}}">Control de químicos en almacén</a></h5>

             <h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('BitacoraResiduosPlaguicidas.index')}}">Residuos de plaguicidas</a></h5>


             <h5> <a class="dropdown-item" style="color:#050200"  href="{{ route('nuevovehi.index')}}">Bitácora Vehículos</a></h5>


             </div>

             	</div>

							 <a href="{{ route('formatoViaticos.index')}}">Viáticos</a>
             
			<a  href="{{ url('/ ') }}">Cerrar sesión</a>


			</section>

	</header>
	<section>
		@yield('contenido')
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="{{ asset('plugins/jquery/js/jquery.js')}}"></script>
	<script src="{{ asset('plugins/Bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('plugins/Bootstrap/js/navbar.js')}}"></script>



	<h5 style="color: #ffffff00;"></br></h5>	
	<h5 style="color: #ffffff00;"></br></h5>
	<h6 style="color: #ffffff00;"></br></h6>	


</body>


<footer class="footer py-3 text-xs-center" style="max-width:100%;width:auto;height:auto;
   position: absolute;
  bottom: 0;
  width: 100%;
  color: black;">	    
  	<p align="center">
  		<center>
	    	<h5>Pánfilo Natera No. 06, Fraccionamiento Las Lomitas,   Tlaltenango de S.R., Zac.   	Tel. 437 954 0033 	Cel. 437 104 2176  </h5>	
	    	<h5>E-mail: tlalzac-controlpest@hotmail.com | tlalzac-ventas@hotmail.com </h5>
	    </center>
	</p>

</footer>

</html>

@extends('template.main')
@section('titulo')
Certificado de fumigación vehícular

@endsection
@section('contenido')

       <center>
       	<div>
            <h1>Certificado de fumigación vehícular</h1>
        </div>
       </center>
<style>
th {
    text-align: center;
}
</style>

<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="panel-body">
                {!! Form::open(['route'=>'CertificadoVehicular.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

				<div class="alert alert-warning text-center font-weight " >

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							<th>
								{!! Form::label('Nombre') !!}
							</th>
						</div>

						<div class="col-md-6">
							{!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'ej. Eduardo Juárez', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>



					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Domicilio') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('domicilio',null,['class'=>'form-control', 'placeholder'=>'ej. Conocido ', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-60}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Ciudad') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('ciudad',null,['class'=>'form-control', 'placeholder'=>'ej. Tlaltenango, Zac.', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Empresa') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('empresa',null,['class'=>'form-control', 'placeholder'=>'ej. Mercado Juárez', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Tipo de vehículo') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('tipo_v',null,['class'=>'form-control', 'placeholder'=>'ej. Camioneta', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Placas') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('placas',null,['class'=>'form-control', 'placeholder'=>'ej. ZHF-24-883', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Giro de vehículo') !!}
						</div>

						<div class="col-md-6">
                        {!! Form::text('giro_v',null,['class'=>'form-control', 'placeholder'=>'ej. Camión de una sola unidad', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}

						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Tipo de químico aplicado') !!}
						</div>

						<div class="col-md-6">
                            {!! Form::text('tipo_quimico_aplicado',null,['class'=>'form-control', 'placeholder'=>'ej. Ácido Clorhídrico', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>					



					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Fecha de fumigación') !!}
						</div>

						<div class="col-md-6">

							{!! Form::date('fecha_fumigacion',null,['class'=>'form-control', 'min'=>'2000-01-01']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Fecha de Vencimiento') !!}
						</div>

						<div class="col-md-6">

							{!! Form::date('fecha_vencimiento',null,['class'=>'form-control', 'min'=>'2000-01-01']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Técnico responsable') !!}
						</div>

						<div class="col-md-6">
                        {!! Form::text('tecnico_responsable',null,['class'=>'form-control', 'placeholder'=>'ej. Aram Del Real', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}

						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
						</div>

						<div class="col-md-6">
							{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				  {!!Form::close()  !!}
			</div>
		</div>
	</div>	


@endsection

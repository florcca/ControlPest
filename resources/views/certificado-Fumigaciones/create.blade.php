@extends('template.main')
@section('titulo')
Certificado de fumigación

@endsection
@section('contenido')

       <center>
       	<div>
            <h1>Certificado de fumigación</h1>
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

				<div class="alert alert-warning text-center font-weight " >

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							<th>
								{!! Form::label('Nombre') !!}
							</th>
						</div>

						<div class="col-md-6">
							{!! Form::text('nombre_negocio',null,['class'=>'form-control', 'placeholder'=>'ej. Mercado Juárez', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>



					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Domicilio') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('Domicilio',null,['class'=>'form-control', 'placeholder'=>'ej. Conocido ', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-60}']) !!}
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
							{!! Form::label('Persona responsable') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('persona_resp',null,['class'=>'form-control', 'placeholder'=>'ej. Benjamin Pinedo', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Tipo de químico aplicado') !!}
						</div>

						<div class="col-md-6">
							{!! Form::text('tipo_quimico',null,['class'=>'form-control', 'placeholder'=>'ej. Cypermetrina', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Fecha de fumigación') !!}
						</div>

						<div class="col-md-6">
							{!! Form::date('fecha_fumi',null,['class'=>'form-control', 'min'=>'2000-01-01']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
							{!! Form::label('Fecha de vencimiento') !!}
						</div>

						<div class="col-md-6">
							{!! Form::date('Fecha_vencim',null,['class'=>'form-control', 'min'=>'2000-01-01']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>					

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 text-right">
						</div>

						<div class="col-md-6">
							{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	


<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="panel-body">

				<div class="alert alert-success text-center font-weight " >
		            <table class="table">
		                <thead>
		                    <tr>
		                      <th>                   </th>
		                      <th>               </th>

		                      <th> Autorización</th>
		                        
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td>Dr. Benjamin Pinedo Mayorga</td>
		                        <td>Técnico responsable</td>
		                        <td>Lic. Erika Mauricio López</td>
		                    </tr>

		                    <tr>
		                        <td>RFC PIMB650421-QX1</td>
		                        <td>Nombre: Benjamin Pinedo M.</td>
		                        <td>Gerente general</td>
		                    </tr>

		                    <tr>
		                        <td>Licencia sanitaria 2009-32A013</td>
		                      	<td>Firma:___________________</td>
		                      	<td>Dr. Benjamin Pinedo Mayorga</td>
		                    </tr>
		                   <table class="table table-striped table-responsive-md btn-table">

		            </table>
		        </div>
				</div>
			</div>
		</div>
	</div>	




@endsection

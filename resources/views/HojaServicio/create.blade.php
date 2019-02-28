
@extends('template.main')
@section('titulo')
Hoja de servicio

@endsection
@section('contenido')

       <center>
       	<div>
            <h1>Hoja de servicio</h1>
        </div>
       </center>

    {!! Form::open(['route'=>'HojaServicio.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}


    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
     		{!! Form::label('Nombre:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder'=> 'ej: Antonio Balderas Macías','required',  'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"  ]) !!}
    	</div>

    	<div class="col-md-3">
    		{!! Form::label('Técnico responsable:') !!}
    	</div>
    </div>


    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
     		{!! Form::label('Domicilio:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('domicilio',null, ['class' => 'form-control', 'placeholder'=> 'ej: Nacional 21','required','pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z0-9_ ]*))" ]) !!}
    	</div>

    	<div class="col-md-4">
    		{!! Form::text('tecnico_resp',null, ['class' => 'form-control', 'placeholder'=> 'ej: Juan Arteaga Flores','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
     		{!! Form::label('Cuidad:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('ciudad',null, ['class' => 'form-control', 'placeholder'=> 'ej: Zacatecas','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
    	</div>

    	<div class="col-md-3">
    		{!! Form::label('Fecha:') !!}
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
     		{!! Form::label('Teléfono:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('telefono',null, ['class' => 'form-control','placeholder'=>  'ej: 4371002010','required','pattern'=>'[0-9]{10}']) !!}
    	</div>

    	<div class="col-md-3">
    		{!! Form::date('fecha',null,['class'=>'form-control','required','min'=>'2000-01-01']) !!}
    	</div>

    </div>



    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
     		{!! Form::label('Lugar de aplicación:') !!}
    	</div>
    	<div class="col-md-5">
    		{!! Form::text('lugar_aplicacion',null, ['class' => 'form-control', 'placeholder'=> 'ej: IMSS','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z0-9_ ]*))"]) !!}
    	</div>
    </div>



    <div class="row">
    	<div class="col-md-1">     </div>
    	<div class="col-md-2">
    		<div class="alert alert-success">
    			<center>
    				{!! Form::label('Tipo de plaga') !!}
    			</center>
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class="alert alert-success">
    			<center>
    				{!! Form::label('Giro del establecimiento') !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class="alert alert-success">
    			<center>
    				{!! Form::label('Características del local') !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-5">
    		<div class="alert alert-success">
    			<center>
    				{!! Form::label('Químicos a utilizar') !!}
    			</center>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt1">
    			<label class="form-check-label" for="check_pt1">  Pt 1</label>
    		</div>
    	</div>

    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select name ="casa_habitacion" class="custom-select">
    			<option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Casa habitación') !!}
    	</div>


    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_nohab">
    			<label class="form-check-label" for="checkcaractLocal_nohab">  No habitado</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    				{!! Form::label('   CÓDIGO') !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    				{!! Form::label('DOSIS') !!}

    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    				{!! Form::label('CANTIDAD') !!}
    			</center>
    		</div>
    	</div>

    </div>


    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt2">
    			<label class="form-check-label" for="check_pt2">  Pt 2</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="restaurante">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Restaurante                            ') !!}
    	</div>


    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_casjar">
    			<label class="form-check-label" for="checkcaractLocal_casjar">  Casa Jardín</label>
    		</div>
    	</div>


    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod1',null, ['class' => 'form-control', 'placeholder'=> 'ej: Qtz', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis1',null, ['class' => 'form-control', 'placeholder'=> 'ej: Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant1',null, ['class' => 'form-control', 'placeholder'=> 'ej: 3', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    			</center>
    		</div>
    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt3">
    			<label class="form-check-label" for="check_pt3">  Pt 3</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="abarrotes">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Abarrotes') !!}
    	</div>

    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_matpar">
    			<label class="form-check-label" for="checkcaractLocal_matpar">  Material paredes</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod2',null, ['class' => 'form-control', 'placeholder'=> 'ej: Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis2',null, ['class' => 'form-control', 'placeholder'=> 'ej: Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant2',null, ['class' => 'form-control', 'placeholder'=> 'ej: 7', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt4">
    			<label class="form-check-label" for="check_pt4">  Pt 4</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="bodega">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Bodega') !!}
    	</div>

    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tip_enj">
    			<label class="form-check-label" for="checkcaractLocal_tip_enj">  Tipo enjarre</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod3',null, ['class' => 'form-control', 'placeholder'=> 'ej: Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis3',null, ['class' => 'form-control', 'placeholder'=> 'ej: Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant3',null, ['class' => 'form-control', 'placeholder'=> 'ej: 5', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt5">
    			<label class="form-check-label" for="check_pt5">  Pt 5</label>
    		</div>

    	</div>

    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="caniceria">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Carnicería') !!}
    	</div>
    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tub">
    			<label class="form-check-label" for="checkcaractLocal_tub">  Tipo tuberías</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod4',null, ['class' => 'form-control', 'placeholder'=> 'ej: Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis4',null, ['class' => 'form-control', 'placeholder'=> 'ej: Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant4',null, ['class' => 'form-control', 'placeholder'=> 'ej: 7', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>

    </div>

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt6">
    			<label class="form-check-label" for="check_pt6">  Pt 6</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="consutorio">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Consultorio') !!}
    	</div>
    	<div class="col-md-2">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_elect">
    			<label class="form-check-label" for="checkcaractLocal_elect">  Electrodomésticos</label>
    		</div>
    	</div>
    </div>


    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt7">
    			<label class="form-check-label" for="check_pt7">  Pt 7</label>
    		</div>
    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="otros">
          <option selected value="0">0</option>
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
    			<option value="13">13</option>
    		</select>
    	</div>
    		<div class="col-md-1">
    	 				{!! Form::text('otros_giro_establecimiento',null, ['class' => 'form-control', 'placeholder'=> 'Otros:', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-50}']) !!}
    		</div>

    		<div class="col-md-2">
    			<div class="form-check"
    				<input class="form-check-input" type="checkbox" value="1" name="otros_local">

    				{!! Form::text('otros_caracteristicas_local',null, ['class' => 'form-control', 'placeholder'=> 'Otros:','pattern'=>'[A-Za-záéíóúüñ-0-9]{1-50}']) !!}
    			</div>
    		</div>
    </div>



    <div class="row">
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt8">
    			<label class="form-check-label" for="check_pt8">  Pt 8</label>
    		</div>
    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt9">
    			<label class="form-check-label" for="check_pt9">  Pt 9</label>
    		</div>

    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1"><h5></h5>      	</div>

    	<div class="col-md-1"><h5></h5>
    		<div class="form-check">
    			<input class="form-check-input" type="checkbox" value="1" name="check_pt10">
    			<label class="form-check-label" for="pt10">  Pt 10</label>
    		</div>

    	</div>
    </div>
    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-3"><h5><mark></mark></h5></div>
      <div class="col-md-4"><h5></h5></div>
      <div class="col-md-4"><h5></h5></div>

    </div>

    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-3"><h5><div class="alert alert-success">Nivel</div></h5></div>
      <div class="col-md-4"><div class="alert alert-success"><h5>Código de plaga</h5></div></div>
      <div class="col-md-4"><div class="alert alert-success"><h5>Código de químicos</h5></div></div>


    </div>
    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-3"><h5></h5></div>
      <div class="col-md-4"><h5></h5></div>
      <div class="col-md-4"><h5></h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2"><h4 class="col-12 col-md-auto">1</h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 1 Cucaracha alemana</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 1 Diazinon</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2"><h4 class="col-12 col-md-auto">2</h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 2 Cucaracha americana</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 2 Diclorvos</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2"><h4 class="col-12 col-md-auto">3</h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 3 Cucaracha banda café</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 3 Clorpirofos</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
     <div class="col-md-2"><h5>Otros</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 4 Mosca doméstica</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 4 Piretrina</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2"><h4 class="col-10 col-md-auto"></h4></div>
      <div class="col-md-4" ><h5 class="col-12 col-md-auto">Ptz 5 Hormiga</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 5 Butoxido de piperonilo</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 6 Alacrán</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 6 Ácido bórico</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4 ></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 7 Termitas</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 7 Cypermethina</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 8 Ratón doméstico</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 8 Ciflufin</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4 "></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 9 Rata noruega</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 9 Hidrametilona</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Ptz 10 Rata del tejado</h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 10 Warfanina</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto"></h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 11 Bromadiolona</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto"></h5></div>
      <div class="col-md-4"><h5 class="col-12 col-md-auto">Qtz 12 Trifumuron</h5></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>
    <div class="row">
      <div class="col-md-2">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>

    <div class="row">
      <div class="col-md-1">        </div>
     <div class="col-md-2 col-md-offset-1-and-half"><div class="alert alert-success"><h5>Fecha de aplicación</h5></div></div>
     <div class="col-md-2 col-md-offset-1-and-half"><div class="alert alert-success"><h5 >Próximo servicio</h5></div></div>
      <div class="col-md-3"><div class="alert alert-success"><h5>Indicaciones Pre-aplicación</h5></div></div>
      <div class="col-md-3"><div class="alert alert-success"><h5>Indicaciones Pos-aplicación</h5></div></div>
    </div>
    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-sm-2">{!! Form::date('fecha_apli',null,['class'=>'form-control','required', 'placeholder'=>'']) !!}</div>
      <div class="col-sm-2">{!! Form::date('fecha_prox_apli',null,['class'=>'form-control','required', 'placeholder'=>'']) !!}</div>

      <div class="col-md-3"><textarea name="ind_pre" class="form-control" rows="4" id="textarea" placeholder="Ingrese el las indicaciones para la Pre-aplicación" ></textarea></div>

      <div class="col-md-3"><textarea name="ind_pos" class="form-control" rows="4" id="textarea" placeholder="Ingrese el las indicaciones para la Pos-aplicación" ></textarea></div>
    </div>

    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>
    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>
    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-2 col-md-offset-1-and-half"><h4></h4></div>
    </div>

    <div class="row">
      <div class="col-md-1">        </div>
     <div class="col-md-4 col-md-offset-1-and-half"><div class="alert alert-success"><h5>Asentó de conformidad</h5></div></div>
     <div class="col-md-4 col-md-offset-1-and-half"><div class="alert alert-success"><h5 >Técnico responsable</h5></div></div>
      <div class="col-md-2"><div class="alert alert-success"><h5>Firma de autorización "Control Pest"</br></h5></div></div>
    </div>

    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-1 center"><h6>
        {!! Form::label('Nombre:') !!}</h6>
      </div>
      <div class="col-md-3">
        {!! Form::text('nombre_cliente',null, ['class' => 'form-control', 'placeholder'=> 'ej: Sergio Saldaña Valdez','pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
      </div>
      <div class="col-12 col-md-auto"><h6>
        {!! Form::label('Nombre:') !!}</h6>
      </div>
      <div class="col-md-3">
        {!! Form::text('nombre_tecnico',null, ['class' => 'form-control', 'placeholder'=> 'ej: Alicia Robles Rosales', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-1 center"><h6>
        {!! Form::label('Fecha:  ') !!}</h6>
      </div>
      <div class="col-md-2">
        {!! Form::date('fecha_firma',null,['class'=>'form-control','required','placeholder'=>'']) !!}
      </div>
    </div>

    <div align="right">
      <div class="form-group col-md-3">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
      </div>
      {!!Form::close()  !!}
</div>
@endsection

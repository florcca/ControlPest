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



    {!! Form::open(['route'=>['HojaServicio.update', $hojaservicioPDF[0]->id],'method'=>'PUT']) !!}
    

    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
     		{!! Form::label('Nombre: ') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('nombre',$hojaservicioPDF[0]->nombre, ['class' => 'form-control', 'placeholder'=> 'ej: Antonio Balderas Macías','required',  'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"  ]) !!}
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
    		{!! Form::text('domicilio',$hojaservicioPDF[0]->domicilio, ['class' => 'form-control', 'placeholder'=> 'ej: Nacional 21','required', 'pattern'=>'[a-zA-Z0-9 ]+([.#][a-zA-Z0-9_]+)*#[a-zA-Z0-9_]{1,100}']) !!}
    	</div>

    	<div class="col-md-4">
    		{!! Form::text('tecnico_resp',$hojaservicioPDF[0]->responsable, ['class' => 'form-control', 'placeholder'=> 'ej: Juan Arteaga Flores','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
    	</div>

    </div>



    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
     		{!! Form::label('Ciudad:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('ciudad',$hojaservicioPDF[0]->ciudad, ['class' => 'form-control', 'placeholder'=> 'ej: Zacatecas','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
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
    		{!! Form::text('telefono',$hojaservicioPDF[0]->telefono, ['class' => 'form-control','placeholder'=>  'ej: 4371002010','required','pattern'=>'[0-9]{10}']) !!}
    	</div>

    	<div class="col-md-3">
    		{!! Form::date('fecha',$hojaservicioPDF[0]->fecha,['class'=>'form-control','required','min'=>'2000-01-01']) !!}
    	</div>

    </div>



    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
     		{!! Form::label('Lugar de aplicación:') !!}
    	</div>

    	<div class="col-md-5">
    		{!! Form::text('lugar_aplicacion',$hojaservicioPDF[0]->lugar_de_aplicacion, ['class' => 'form-control', 'placeholder'=> 'ej: IMSS','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z0-9_ ]*))"]) !!}
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
                @if($tipoplagaPDF[0]->ptz1 == 0)
    			     <input class="form-check-input" type="checkbox" value="1" name="check_pt1">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt1" checked>
                @endif
    			<label class="form-check-label" for="check_pt1">  Pt 1</label>
    		</div>
    	</div>

    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select name ="casa_habitacion" class="custom-select">
    			@if($giroestablecimientoPDF[0]->casa_abitacion == 0)
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
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 3) 
    			    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 4) 
                    <option selected value="4">4</option>
    			    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->casa_abitacion == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->casa_abitacion == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif
    		</select>
    	</div>

    	<div class="col-md-1">
     		{!! Form::label('Casa habitación') !!}
    	</div>


    	<div class="col-md-2">
    		<div class="form-check">

                @if($caracteristicaslocPDF[0]->no_habitado == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_nohab">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_nohab "checked>
                @endif

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
                @if($tipoplagaPDF[0]->ptz2 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt2">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt2" checked>
                @endif
    			
    			<label class="form-check-label" for="check_pt2">  Pt 2</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="restaurante">

                @if($giroestablecimientoPDF[0]->restaurante == 0)               
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
                @elseif($giroestablecimientoPDF[0]->restaurante == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->restaurante == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->restaurante == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->restaurante == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->restaurante == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->restaurante == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif


    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Restaurante                            ') !!}
    	</div>


    	<div class="col-md-2">
    		<div class="form-check">
                @if($caracteristicaslocPDF[0]->casa_gardin == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_casjar">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_casjar" checked>
                @endif

    			
    			<label class="form-check-label" for="checkcaractLocal_casjar">  Casa Jardín</label>
    		</div>
    	</div>


    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod1',$var1, ['class' => 'form-control', 'placeholder'=> 'Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>                           
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis1',$var2, ['class' => 'form-control', 'placeholder'=> 'Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant1',$var3, ['class' => 'form-control', 'placeholder'=> 'cantidad', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    			</center>
    		</div>
    	</div>


    </div>



    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
                @if($tipoplagaPDF[0]->ptz3 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt3">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt3" checked>
                @endif

    			
    			<label class="form-check-label" for="check_pt3">  Pt 3</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="abarrotes">
               
            @if($giroestablecimientoPDF[0]->abarrotes == 0)
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
                @elseif($giroestablecimientoPDF[0]->abarrotes == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->abarrotes == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->abarrotes == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->abarrotes == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->abarrotes == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->abarrotes == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif

    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Abarrotes') !!}
    	</div>

    	<div class="col-md-2">
    		<div class="form-check">

                @if($caracteristicaslocPDF[0]->material_paredes == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_matpar">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_matpar" checked>
                @endif
    			
    			<label class="form-check-label" for="checkcaractLocal_matpar">  Material paredes</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod2',$var4, ['class' => 'form-control', 'placeholder'=> 'Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis2',$var5, ['class' => 'form-control', 'placeholder'=> 'Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))"]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant2',$var6, ['class' => 'form-control', 'placeholder'=> 'cantidad', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>

    </div>



    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz4 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt4">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt4" checked>
                @endif
    			
    			<label class="form-check-label" for="check_pt4">  Pt 4</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="bodega">
          
                @if($giroestablecimientoPDF[0]->bodega == 0)
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
                @elseif($giroestablecimientoPDF[0]->bodega == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->bodega == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->bodega == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->bodega == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->bodega == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->bodega == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif

    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Bodega') !!}
    	</div>

    	<div class="col-md-2">
    		<div class="form-check">

                @if($caracteristicaslocPDF[0]->tipo_de_engarre == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tip_enj">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tip_enj" checked>
                @endif


    			<label class="form-check-label" for="checkcaractLocal_tip_enj">  Tipo enjarre</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod3',$var7, ['class' => 'form-control', 'placeholder'=> 'Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis3',$var8, ['class' => 'form-control', 'placeholder'=> 'Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant3',$var9, ['class' => 'form-control', 'placeholder'=> 'cantidad', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>
    </div>




    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz5 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt5">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt5" checked>
                @endif
    			
    			<label class="form-check-label" for="check_pt5">  Pt 5</label>
    		</div>

    	</div>

    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="caniceria">
          
                @if($giroestablecimientoPDF[0]->carniceria == 0)
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
                @elseif($giroestablecimientoPDF[0]->carniceria == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->carniceria == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->carniceria == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->carniceria == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->carniceria == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->carniceria == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif

    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Carnicería') !!}
    	</div>
    	<div class="col-md-2">
    		<div class="form-check">

                @if($caracteristicaslocPDF[0]->tipo_tuberias == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tub">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_tub" checked>
                @endif
    			
    			<label class="form-check-label" for="checkcaractLocal_tub">  Tipo tuberías</label>
    		</div>
    	</div>

    	<div class="col-md-1">
    		<div class=" alert-warning">
    			{!! Form::text('caja_cod4',$var10, ['class' => 'form-control', 'placeholder'=> 'Qtz1', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
    		</div>
    	</div>


    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_dosis4',$var11, ['class' => 'form-control', 'placeholder'=> 'Diazinon', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
    			</center>
    		</div>
    	</div>

    	<div class="col-md-2">
    		<div class=" alert-warning">
    			<center>
    		{!! Form::text('caja_cant4',$var12, ['class' => 'form-control', 'placeholder'=> 'cantidad', 'pattern'=>"((?:[0-9]))"]) !!}
    			</center>
    		</div>
    	</div>



    </div>


    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz6 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt6">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt6" checked>
                @endif
    			<label class="form-check-label" for="check_pt6">  Pt 6</label>
    		</div>

    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="consutorio">
          
          @if($giroestablecimientoPDF[0]->consutorio == 0)
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
                @elseif($giroestablecimientoPDF[0]->consutorio == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->consutorio == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->consutorio == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->consutorio == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->consutorio == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->consutorio == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif


    		</select>
    	</div>
    	<div class="col-md-1">
     		{!! Form::label('Consultorio') !!}
    	</div>
    	<div class="col-md-2">
    		<div class="form-check">

                @if($caracteristicaslocPDF[0]->Electrodomesticos == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_elect">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="checkcaractLocal_elect" , checked>
                @endif
                
    			
    			<label class="form-check-label" for="checkcaractLocal_elect">  Electrodomésticos</label>
    		</div>
    	</div>
    </div>


    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz7 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt7">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt7" checked>
                @endif
    			
    			<label class="form-check-label" for="check_pt7">  Pt 7</label>
    		</div>
    	</div>
    	<div class="col-md-1">      	</div>
    	<div class="col-md-1">
    		<select class="custom-select" name="otros">
          
          @if($giroestablecimientoPDF[0]->otroscheck == 0)
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
                @elseif($giroestablecimientoPDF[0]->otroscheck == 1)  
                    <option value="0">0</option>
                    <option selected value="1">1</option>
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
                @elseif($giroestablecimientoPDF[0]->otroscheck == 2) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option selected value="2">2</option>
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
                @elseif($giroestablecimientoPDF[0]->otroscheck == 3) 
                    <option  value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected value="3">3</option>
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
                @elseif($giroestablecimientoPDF[0]->otroscheck == 4) 
                    <option selected value="4">4</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 5) 
                    <option selected value="5">5</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 6) 
                    <option selected value="6">6</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 7) 
                    <option selected value="7">7</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 8) 
                    <option selected value="8">8</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 9) 
                    <option selected value="9">9</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 10) 
                    <option selected value="10">10</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 11) 
                    <option selected value="11">11</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                @elseif($giroestablecimientoPDF[0]->otroscheck == 12) 
                    <option selected value="12">12</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    @elseif($giroestablecimientoPDF[0]->otroscheck == 13) 
                    <option selected value="13">13</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 
                @endif

    		</select>
    	</div>
    		<div class="col-md-1">
    	 				{!! Form::text('otros_giro_establecimiento',$giroestablecimientoPDF[0]->otrosstring, ['class' => 'form-control', 'required','placeholder'=> 'Otros:', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-50}']) !!}
    		</div>


    		<div class="col-md-2">
    			<div class="form-check">

              
                     
            

    				{!! Form::text('otros_caracteristicas_local',$caracteristicaslocPDF[0]->otros, ['class' => 'form-control', 'placeholder'=> 'Otros:', 'required','pattern'=>'[A-Za-záéíóúüñ-0-9]{1-50}']) !!}
    			</div>
    		</div>


    </div>



    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">
                @if($tipoplagaPDF[0]->ptz8 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt8">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt8" checked>
                @endif
    		
    			<label class="form-check-label" for="check_pt8">  Pt 8</label>
    		</div>


    	</div>


    </div>


    <div class="row">

    	<div class="col-md-1">      	</div>

    	<div class="col-md-1">
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz9 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt9">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt9" checked>
                @endif
    		
    			<label class="form-check-label" for="check_pt9">  Pt 9</label>
    		</div>

    	</div>
    </div>

    <div class="row">

    	<div class="col-md-1"><h5></h5>      	</div>

    	<div class="col-md-1"><h5></h5>
    		<div class="form-check">

                @if($tipoplagaPDF[0]->ptz10 == 0)
                     <input class="form-check-input" type="checkbox" value="1" name="check_pt10">
                @else
                    <input class="form-check-input" type="checkbox" value="1" name="check_pt10" checked>
                @endif
    		
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
      
      <div class="col-sm-2">{!! Form::date('fecha_apli',$informacionPDF[0]->fecha_de_aplicacion,['class'=>'form-control','required', 'placeholder'=>'']) !!}</div>
      <div class="col-sm-2">{!! Form::date('fecha_prox_apli',$informacionPDF[0]->fecha_proximo_servicio,['class'=>'form-control','required', 'placeholder'=>'']) !!}</div>

      <div class="col-md-3"><textarea name="ind_pre" class="form-control"  rows="4" id="textarea" placeholder={{$informacionPDF[0]->In_preaplicacion}} ></textarea></div>

      <div class="col-md-3"><textarea name="ind_pos" class="form-control" rows="4" id="textarea" placeholder={{$informacionPDF[0]->In_posaplicacion }} ></textarea></div>
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
        {!! Form::text('nombre_cliente',$hojaservicioPDF[0]->nombre, ['class' => 'form-control', 'placeholder'=> 'Ingrese nombre del cliente','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
      </div>
      <div class="col-12 col-md-auto"><h6>
        {!! Form::label('Nombre:') !!}</h6>
      </div>
      <div class="col-md-3">
        {!! Form::text('nombre_tecnico',$hojaservicioPDF[0]->responsable, ['class' => 'form-control', 'placeholder'=> 'Ingrese nombre del técnico','required', 'pattern'=>"((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))" ]) !!}
      </div>
    </div>



    <div class="row">
      <div class="col-md-1">        </div>
      <div class="col-md-1 center"><h6>
        {!! Form::label('Fecha:  ') !!}</h6>
      </div>
      <div class="col-md-2">
        {!! Form::date('fecha_firma',$hojaservicioPDF[0]->fecha,['class'=>'form-control','required','placeholder'=>'']) !!}
      </div>
    </div>


    <div align="right">
      <div class="form-group col-md-3">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
      </div>
      {!!Form::close()  !!}
</div>
@endsection

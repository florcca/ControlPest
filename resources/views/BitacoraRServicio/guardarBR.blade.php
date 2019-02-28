@extends('template.main')
@section('titulo')
BITACORAS DE SERVICIO
@endsection
@section('contenido')
       <center>
        <div>
            <h1>Bitácora de Servicio</h1>
        </div>
       </center>
  
<br>



<div class="container background-white">
        <div class="row">

            <div class="col-md-12 background-white">
                <div class="alert alert-warning text-center font-weight " >
                    <div class="panel panel-default">

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Nombre') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Nombre',null,['class'=>'form-control', 'placeholder'=>'ej. Guarderia', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Dirección') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Dirección',null,['class'=>'form-control', 'placeholder'=>'ej. Irapuato', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Tipo de plaga') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Tipo de plaga',null,['class'=>'form-control', 'placeholder'=>'Variable', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Químico Aplicado') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Quimico Aplicado',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Fecha de Aplicación') !!}
                          <div class="col-sm-10">
                          {!! Form::date('Fecha de Aplicación',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Próxima Aplicación:') !!}
                          <div class="col-sm-10">
                          {!! Form::date('Próxima Aplicación:',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Refuerzo Grande') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Refuerzo Grande',null,['class'=>'form-control', 'placeholder'=>'']) !!}
                        </div>
                      </div>
                      </div>

                      </div>
                      </div>
                      </div>
                      </div>
                      </div>




@endsection





                       
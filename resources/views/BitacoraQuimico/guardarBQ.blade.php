      <center>
        <div>
            <h1>Bitácora de Químico</h1>
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
                          {!! Form::label('Trabajador') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Trabajador',null,['class'=>'form-control', 'placeholder'=>'ej. Benjamin', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Mes') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Mes',null,['class'=>'form-control', 'placeholder'=>'ej. Enero', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Químico') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Químico',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Total') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Total',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Restante') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Restante',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Entregados') !!}
                          <div class="col-sm-10">
                          {!! Form::text('Entregados',null,['class'=>'form-control', 'placeholder'=>'', 'pattern'=>'[A-Za-záéíóúüñ-0-9]{1-30}']) !!}
                        </div>
                      </div>
                      </div>

                      <div class="panel-body">
                        <div class="form-group row">
                          {!! Form::label('Fecha') !!}
                          <div class="col-sm-10">
                          {!! Form::date('Fecha',null,['class'=>'form-control', 'placeholder'=>'']) !!}
                        </div>
                      </div>
                      </div>

                      </div>
                      </div>
                      </div>
                      </div>
                      </div> 




@endsection

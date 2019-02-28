@extends('template.main')
@section('titulo')
Agregar residuos de plaguicidas
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">
                {!! Form::open(['route'=>'BitacoraResiduosPlaguicidas.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <center>
                      <div>

                        <h1>Agregar residuos de plaguicidas</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Fecha ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::Date('Fecha',null, ['class' => 'form-control','required']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('No. de producto ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('NoProducto',null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

<div class="row">

                  <div class="col-md-4 text-right">
                    {!! Form::label( 'Cantidad de desecho ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('CantidadDesecho',null, ['class' => 'form-control','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Destino Final ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('DestinoFinal',null,['class'=>'form-control','required','placeholder'=>'']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Observaciones ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('Observaciones',null,['class'=>'form-control','required','placeholder'=>'']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">
   <div class="col-md-3"></div>

   <div class="col-md-4">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
  </div>
  {!!Form::close()  !!}
</div>



</div>
</div>
</div>
<div class="col-md-2"></div>
</div>

</section>

@endsection
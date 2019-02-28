@extends('template.main')
@section('titulo')
Formato de viáticos
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">
                <center>
                      <div>

                        <h1>Agregar registro de viáticos</h1>
                  </div>
            </center>
            {!! Form::open(['route'=>'formatoViaticos.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Nombre de la ruta ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('ruta',null, ['class' => 'form-control', 'placeholder'=> 'ej: IMSS Aguascalientes','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Nombre del técnico ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('tecnico',null, ['class' => 'form-control', 'placeholder'=> 'ej: Manuel Rosales Sandoval', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

<div class="row">

                  <div class="col-md-4 text-right">
                    {!! Form::label( 'Fecha ') !!}
              </div>

              <div class="col-md-6">
              {!! Form::date('fecha',null,['class'=>'form-control', 'min'=>'2000-01-01']) !!}
              </div>
              <div class="col-md-1"></div>
</div>



<div class="row">

                  <div class="col-md-4 text-right">
                    {!! Form::label( 'Fondo ') !!}
              </div>

              <div class="col-md-6">
              {!! Form::text('fondo',null, ['class' => 'form-control', 'placeholder'=> 'ej: $1000', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>










</div>
</div>
</div>
<div class="col-md-2"></div>
</div>


<br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">

            {!! Form::open(['route'=>'formatoViaticos.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="alert alert-success text-center font-weight " >






<div class="row">

                  <div class="col-md-5 text-right">
                    {!! Form::label( 'Comida ') !!}
              </div>

              <div class="col-md-2">
              {!! Form::text('comida',null, ['class' => 'form-control', 'placeholder'=> 'ej: 300', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">

                  <div class="col-md-5 text-right">
                    {!! Form::label( 'Gasolina ') !!}
              </div>

              <div class="col-md-2">
              {!! Form::text('gasolina',null, ['class' => 'form-control', 'placeholder'=> 'ej: 500', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>



<div class="row">

                  <div class="col-md-5 text-right">
                    {!! Form::label( 'Hotel ') !!}
              </div>

              <div class="col-md-2">
              {!! Form::text('hotel',null, ['class' => 'form-control', 'placeholder'=> 'ej: 900', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>



<div class="row">

                  <div class="col-md-5 text-right">
                    {!! Form::label( 'Extra ') !!}
              </div>

              <div class="col-md-2">
              {!! Form::text('extra',null, ['class' => 'form-control', 'placeholder'=> 'ej: 600', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>




<div class="row">
   <div class="col-md-3" ></div>

   <div class="col-md-6" align="right">
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
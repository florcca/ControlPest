@extends('template.main')
@section('titulo')
Agregar nuevo vehículo
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">

{!! Form::open(['route'=>'nuevovehi.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

                <center>
                      <div>

                        <h1>Agregar nuevo vehículo</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Marca ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('Marca',null, ['class' => 'form-control', 'placeholder'=> 'ej: Nissan','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Modelo ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Modelo',null, ['class' => 'form-control', 'placeholder'=> 'ej: Versa 2018','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


      <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Número de serie ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Num_serie',null, ['class' => 'form-control', 'placeholder'=> 'ej: NVS-343HF33F4T4R','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


   <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Chofer o área asignada ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Chofer',null, ['class' => 'form-control', 'placeholder'=> 'ej: Maria Maribel Sánzhez','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

<div class="row-3">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
        </div>
  </div>


<div class="row">
   <div class="col-md-3"></div>

   <div class="col-md-4">
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
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

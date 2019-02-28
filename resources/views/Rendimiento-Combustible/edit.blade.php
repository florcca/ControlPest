@extends('template.main')
@section('titulo')
Editar vehículo
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">


{!! Form::open(['route'=>['nuevovehi.update',$nuev_veh],'method'=>'PUT']) !!}

                <center>
                      <div>

                        <h1>Editar vehículo</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Marca ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('Marca',$nuev_veh->Marca, ['class' => 'form-control', 'placeholder'=> 'ej: Nissan','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Modelo ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Modelo',$nuev_veh->Modelo, ['class' => 'form-control', 'placeholder'=> 'ej: Versa 2018','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


      <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Número de serie ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Num_serie',$nuev_veh->Num_serie, ['class' => 'form-control', 'placeholder'=> 'ej: NVS-343HF33F4T4R','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


   <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Chofer o área asignada ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Chofer',$nuev_veh->Chofer, ['class' => 'form-control', 'placeholder'=> 'ej: Maria Maribel Sánzhez','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
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
        {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
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

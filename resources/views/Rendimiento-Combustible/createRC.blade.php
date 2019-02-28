@extends('template.main')
@section('titulo')
Rendimiento de combustible de un veículo
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">




{!! Form::open(['route'=>['nuevo.paravehiculo',$id_vehiculo],'method'=>'POST']) !!}


                <center>
                      <div>

                        <h1>Rendimiento de combustible de un vehículo</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >
              <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Fecha') !!}
        </div>

                <div class="col-md-6">
         {!! Form::date('Fecha',null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-md-1">
                </div>
          </div>


          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Kilometraje Inicial') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('kiloinicial',null, ['class' => 'form-control', 'placeholder'=> 'ej: 63123 km','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Kilometraje Final') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('kilofin',null, ['class' => 'form-control', 'placeholder'=> 'ej: 63126 km','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Litros') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('litros',null, ['class' => 'form-control', 'placeholder'=> 'ej: 21','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Importe') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('importe',null, ['class' => 'form-control', 'placeholder'=> 'ej: $500.00','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .$0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Nota o factura') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('nota',null, ['class' => 'form-control', 'placeholder'=> 'ej: FA-371','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9-]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Observaciones en general') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('observaciones',null, ['class' => 'form-control', 'placeholder'=> '','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


<div class="row-3">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
        </div>
  </div>

{{ $id_vehiculo }}
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

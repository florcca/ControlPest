
@extends('template.main')
@section('titulo')
Bitácora de mantenimiento de equipo

@endsection
@section('contenido')


  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">

       {!! Form::open(['route'=>'BitacoraMantenimientoEquipo.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}



       <center>
        <div>
            <h1>Bitácora de mantenimiento de equipo</h1>
        </div>
       </center>

            <div class="alert alert-warning text-center font-weight " >



                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label('Tipo de equipo') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('TipoEquipo',null, ['class' => 'form-control', 'placeholder'=> 'ej: Tipo de equipo','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,70}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

  
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('No. de unidad') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('NoUnidad',null, ['class' => 'form-control', 'placeholder'=> 'ej: no unidad','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Cambio de empaque') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('CambioEmpaques',null, ['class' => 'form-control', 'placeholder'=> 'ej: Cambio empaque','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Lubricación') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Lubricacion',null, ['class' => 'form-control', 'placeholder'=> 'ej:Lubricación','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Cambio boquillas') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('CambioBoquillas',null, ['class' => 'form-control', 'placeholder'=> 'ej: Cambio boquillas','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>



        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Fecha') !!}
        </div>

        <div class="col-md-6">
 {!! Form::date('Fecha',null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>



        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Observaciones') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Observaciones',null, ['class' => 'form-control', 'required']) !!}
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



@endsection
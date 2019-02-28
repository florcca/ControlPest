@extends('template.main')
@section('titulo')
Editar químico en almacén
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">
                {!! Form::open(['route'=>['BitacoraControlQuimicosAlmacen.update',$bitacoraMan],'method'=>'PUT']) !!}
                <center>
                      <div>

                        <h1>Editar químico en almacén</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Nombre comercial ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('nombre',$bitacoraMan->NombreComercial, ['class' => 'form-control', 'placeholder'=> 'ej: Ácido muriático','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Número de registro único ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('numero_unico',$bitacoraMan->NoRegistroUnico, ['class' => 'form-control', 'placeholder'=> 'ej: Q-231','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .0-9]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

<div class="row">

                  <div class="col-md-4 text-right">
                    {!! Form::label( 'Nombre del ingrediente activo ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('ingrediente',$bitacoraMan->NombreIngredienteActivo, ['class' => 'form-control', 'placeholder'=> 'ej: Ácido Cloridico','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Fecha de emisión del registro ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::date('fecha_emision',$bitacoraMan->FechaEmision,['class'=>'form-control','required','placeholder'=>'']) !!}
              </div>
              <div class="col-md-1"></div>
</div>


<div class="row">
   <div class="col-md-3"></div>

   <div class="col-md-4">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
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
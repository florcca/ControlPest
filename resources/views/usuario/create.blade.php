@extends('template.main')
@section('titulo')
Crear usuario
@endsection
@section('contenido')
<section>

  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">

                {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}

                <center>
                      <div>

                        <h1>Agregar usuario</h1>
                  </div>
            </center>
            
            <div class="alert alert-warning text-center font-weight " >

                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label( 'Nombre ') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('name',null, ['class' => 'form-control', 'placeholder'=> 'ej: Juan','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Apellidos ') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('apellidos',null, ['class' => 'form-control', 'placeholder'=> 'ej: Herrera','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Edad') !!}
  </div>

  <div class="col-md-6">
        {!! Form::text('edad',null, ['class' => 'form-control', 'placeholder'=> 'ej: 25','required', 'pattern'=>'[0-9]{2}']) !!}
  </div>
  <div class="col-md-1"></div>
</div>


<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Núm Celular') !!}
  </div>

  <div class="col-md-6">
        {!! Form::text('numero_contacto',null, ['class' => 'form-control', 'placeholder'=> 'ej: 4371002010','required', 'pattern'=>'[0-9]{10}']) !!}
  </div>
  <div class="col-md-1"></div>
</div>

<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">

        {!! Form::label('Núm Emergencia') !!}

  </div>

  <div class="col-md-6">
        {!! Form::text('numero_emergencia',null, ['class' => 'form-control', 'placeholder'=> 'ej: 4371001090','required', 'pattern'=>'[0-9]{10}']) !!}
  </div>
</div>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Domicilio') !!}
  </div>

  <div class="col-md-6">
      {!! Form::text('domicilio_usuario',null, ['class' => 'form-control', 'placeholder'=> 'ej: Nacional 21','required', '[a-zA-Z0-9 ]+([.#][a-zA-Z0-9_]+)*#[a-zA-Z0-9_]{1,100}']) !!}



  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Email') !!}
  </div>

  <div class="col-md-6">
        {!! Form::email('email',null, ['class' => 'form-control', 'placeholder'=> 'ej: ejemplo@example.com','required', 'pattern'=>"[a-zA-Z0-9_]+([.!#$%^&][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,100}"]) !!}
  </div>
  <div class="col-md-1"></div>
</div>

<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Contraseña') !!}
  </div>

  <div class="col-md-6">

        {!! Form::password('password', ['class' => 'form-control', 'placeholder'=> '*******','required']) !!}
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

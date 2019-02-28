      @extends('template.main')
      @section('titulo')
      Editar usuario
      @endsection
      @section('contenido')
      <section>



        <link rel="stylesheet" href="misestilos.css">

        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  <div class="panel-body">
                   
                        {!! Form::open(['route'=>['users.update', $user],'method'=>'PUT']) !!}

                        <center>
                              <div>

                                    <h1>Editar usuario</h1>
                              </div>
                        </center>

                        <div class="alert alert-warning text-center font-weight " >

                            <div class="row">
                              <div class="col-md-1"></div>

                              <div class="col-md-3 text-right">
                                {!! Form::label( 'Nombre ') !!}
                          </div>

                          <div class="col-md-6">
                                {!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder'=> 'ej: Juan','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,48}']) !!}
                          </div>
                          <div class="col-md-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3 text-right">
                          {!! Form::label('Apellidos ') !!}
                    </div>

                    <div class="col-md-6">
                          {!! Form::text('apellidos',$user->apellidos, ['class' => 'form-control', 'placeholder'=> 'ej: Herrera','required', 'pattern'=>'[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .]{2,65}']) !!}
                    </div>
                    <div class="col-md-1"></div>
              </div>

              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-3 text-right">
                    {!! Form::label('Edad') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('edad',$user->edad, ['class' => 'form-control', 'placeholder'=> 'ej: 25','required', 'pattern'=>'[0-9]{2}']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
              {!! Form::label('Núm Celular') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('numero_contacto',$user->numero, ['class' => 'form-control', 'placeholder'=> 'ej: 4371002010','required', 'pattern'=>'[0-9]{10}']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">

        {!! Form::label('Núm Emergencia') !!}

  </div>

  <div class="col-md-6">
        {!! Form::text('numero_emergencia',$user->numero_emg, ['class' => 'form-control', 'placeholder'=> 'ej: 4371001090','required', 'pattern'=>'[0-9]{10}']) !!}
  </div>
</div>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Domicilio') !!}
  </div>

  <div class="col-md-6">
      {!! Form::text('domicilio_usuario',$user->domicilio, ['class' => 'form-control', 'placeholder'=> 'ej: Nacional 21','required', '[a-zA-Z0-9 ]+([.#][a-zA-Z0-9_]+)*#[a-zA-Z0-9_]{1,100}']) !!}



</div>
<div class="col-md-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-right">
        {!! Form::label('Email') !!}
  </div>

  <div class="col-md-6">
        {!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder'=> 'ej: ejemplo@example.com','required', 'pattern'=>"[a-zA-Z0-9_]+([.!#$%^&][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,100}"]) !!}
  </div>
  <div class="col-md-1"></div>
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

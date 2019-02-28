
<html>
<head>
    <title>INICIAR SESIÓN</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Inicio de sesión</h1>
        {!! Form::open(['route'=>'login','method'=>'POST']) !!}
            <p>Usuario</p>
            <input type="text" name="username" placeholder="Ingrese el usuario">
            <p>Contraseña</p>
            <input type="password" name="password" placeholder="Ingrese la contraseña">
            <input type="submit" name="submit" value="Acceder">
            {{-- <a href="#">¿Olvidó su contraseña?</a> --}}
        {!! Form::close() !!}



        </div>

    </body>
</html>

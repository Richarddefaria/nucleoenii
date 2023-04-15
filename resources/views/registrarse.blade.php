<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav class="flex-container">
            <div class="logo">
                <img src="{!!asset('images/enii.png')!!}" alt="">
            </div>
            <div class="subcontainer">
            <ul class="navigation">
                <li><a href="/">Inicio</a></li>
                <li><a href="nosotros">Sobre nosotros</a></li>
                <li><a href="proyectos">Proyectos</a></li>
                <li><a href="contacto">Contacto</a></li>
            </ul>
            <ul class="navigation navbuttons">
                <li><a href="iniciodesesion">Iniciar sesión</a></li>
                <li><a href="registrarse">Registrarse</a></li>
            </ul>
            </div>
        </nav>
    </header>
    <main>
        <img src="{!!asset('images/image8.png')!!}" alt="" style="width: 557px; height: 450px;">
        <h1>Registro</h1>
        <form action="">
            <label for="nombres">Nombres:</label>
            <input type="text">
            <label for="apellidos">Apellidos:</label>
            <input type="text">
            <p>Sexo:</p>
            <label for="masculino">Masculino</label>
            <input type="radio">
            <label for="femenino">Femenino</label>
            <input type="radio">
            <label for="otro">Otro</label>
            <input type="radio"><br>
            <label for="correo">Correo:</label>
            <input type="email">
            <label for="">Contraseña:</label>
            <input type="password" name="" id="">
            <label for="">Repetir contraseña:</label>
            <input type="password" name="" id="">
            <input type="button" value="Registrar">
        </form>
    </main>
</body>
</html>
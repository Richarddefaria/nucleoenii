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
    <h1>Proyectos</h1>
</body>
</html>
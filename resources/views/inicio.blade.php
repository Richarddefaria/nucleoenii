<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
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
        <div class="fondo">
            <div class="contenedor1">
                <h1 class="tituloprincipal">Emprendimiento, Negocio, Investigación, Innovación</h1>
            </div>
            <div class="contenedor2">
                <p class="parrafo1">¡Haz realidad tu idea de negocio!</h2>
            </div>
            <div class="contenedor3">
                <p class="parrafo2">¡JUNTOS DEMOSTREMOS EL TALENTO Y CAPACIDADES DE NUESTROS PROFESIONALES!</p>
            </div>
        </div>
    </main>
    <footer><p>Copyright 2023 - Todos los derechos reservados</p></footer>
</body>
</html>
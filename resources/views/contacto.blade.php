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
        <div>
            <h1>¡Contáctanos y caminemos juntos al éxito!</h1>
        </div>
        <div>
            <h1>Contacto</h1>
            <p>Universidad Central de Venezuela
                P.º Los Ilustres, Facultad de Ciencias. Caracas 1040, Distrito Capital</p>
            <p>+58-414-3026054<br>+58-424-2977401</p>
            <p>info@nucleoenii.com<br>nucleo.enii@gmail.com</p>
        </div>

    </main>
</body>
</html>
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
        <section>
            <h1>¿Quiénes somos?</h1>
            <p>Trabajamos para reconocer los recursos y el potencial disponible, con el objetivo de transformar conocimiento en capacidades emprendedoras enfocadas en la resolución de problemas y en el desarrollo tecnológico.</p>
            <p>Nuestro modelo de impacto responde a las necesidades de la academia porque impulsa la investigación y la experiencia, la autonomía financiera y se enfoca en la resolución de problemas con impacto en la Agenda 2030.
                Apoyamos la necesaria vinculación de la academia con la empresarialidad del país,como fuente de transferencia de conocimiento y promotora del desarrollo nacional.</p>
            <img src="" alt="">
        </section>
        <section>
            <h2>Misión</h2>
            <p>Liderar la cultura emprendedora con base en el conocimiento universitario, que visibilice las oportunidades profesionales de hacer negocios sostenibles y de impacto</p>
            <h2>Visión</h2>
            <p>Ser parte fundamental en la construcción de una universidad sostenible y autogestionada a partir de la creación de emprendimientos basados en el conocimiento.</p>
            <h2>Valores</h2>
            <h2>Transparencia</h2>
            <p>En el manejo de recursos y en nuestra comunicación.</p>
            <h2>Pasión</h2>
            <p>Para motivar y hacerle frente con acción y determinación a las situaciones por resolver</p>
            <h2>Sostenibilidad</h2>
            <p>Dirige todos nuestros pensamientos, acciones y proyectos.</p>
        </section>
        <section>
            <h1>Directiva del Núcleo</h1>
            <img src="{!!asset('images/image3.png')!!}" alt="" style="width: 623px; height: 642px">
            <p>Mercy Ospina<br>Presidenta</p>
            <img src="{!!asset('images/image4.png')!!}" alt="" style="width: 623px; height: 642px">
            <p>José Antonio Fernandez<br>Vicepresidente</p>
        </section>
    </main>
</body>
</html>

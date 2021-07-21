<!DOCTYPE html>
<!-- Base de la mayoría de las vistas html -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Feria Virtual</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        @section('header') 
            <header class="site-header">
                <div class="contenedor">
                    <div class="barra">
                        <a href="/">
                            <h1 class="no-margin">Feria<span>Virtual</span></h1>
                        </a>
                        <nav class="navegacion">
                            <a href="nosotros">Nosotros</a>
                            <a href="cursos">Ventas</a>
                            <a href="contacto">Contacto</a>
                            <a href="{{ route('home') }}">Iniciar Sesión</a>
                        </nav>
                    </div><!--barra-->

                    <div class="texto-header">
                        <h2 class="no-margin">Feria Virtual MAIPO GRANDE</h2>
                        <p class="no-margin">Las mejores frutas al mejor precio</p>
                    </div>
                </div>
            </header>
        @show
        <div class="contenido-principal contenedor">
            @yield('content')
        </div>

        @section('footer')
        <footer class="site-footer">
        <div class="contenedor">
            <div class="barra">
                <p class="no-margin">Feria<span>Virtual</span></p>
                <nav class="navegacion">
                    <a>@Desarrollado por el equipo de FeriaVirtual.cl - 2020</a>
                </nav>
            </div>
        </div>
        </footer>
        @show
    </body>
</html>
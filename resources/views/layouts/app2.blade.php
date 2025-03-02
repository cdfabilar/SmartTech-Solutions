<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SmartTech</title>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-custom-3 bg-opacity-10 sticky-top border-bottom">
            <div class="container d-flex">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">

                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto  w-100 d-flex align-items-center">
                            <li class="nav-item w-25"><a class="nav-link" href="{{ route('Landing') }}"><img src="{{ asset('IMG/Titulo.gif') }}" class="w-100" alt="..."></a></li>
                            <div class="ms-auto d-flex">
                                <li class="nav-item"><a class="nav-link text-white" href="{{ route('Landing') }}">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="{{ route('Mi Empresa') }}">Mi Empresa</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="#">Conocenos</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="#">Servicios</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="col-2 bg-custom-3 min-vh-100 position-fixed">

            <ul class="navbar-nav d-flex align-items-center">

                <img src="{{ asset('IMG/Logo.png') }}" class="w-75 m-3" alt="...">

                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Ventas</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Clientes</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Inventario</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Personal</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Sucursales</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Camaras SEG</a></li>

            </ul>

        </div>


        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>

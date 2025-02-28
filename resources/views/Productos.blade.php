<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        🥬 Productos 🍎
    </title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>

    <nav class="navbar navbar-expand-md bg-custom-1 sticky-top border-bottom">
        <div class="container d-flex">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">

                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto  w-100 d-flex align-items-center">
                        <li class="nav-item w-25"><a class="nav-link" href="{{ route('Landing') }}"><img src="{{ asset('IMG/Titulo.gif') }}" class="w-50" alt="..."></a></li>
                        <div class="ms-auto d-flex">
                            <li class="nav-item"><a class="nav-link text-white" href="{{ route('Productos') }}">Productos</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Comprar</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Mi Canasta</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-custom-2 text-center  min-vh-100">

        <div class="row d-flex">

            <div class="col-2 bg-success-subtle min-vh-100 ">

                <ul class="navbar-nav d-flex align-items-center">

                    <img src="{{ asset('IMG/Logo.png') }}" class="w-50 m-3" alt="...">
                    <h1 class="fs-4 me-auto">Frutas</h1>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Manzanas</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Sandias</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Citricos</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Exoticas</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Lugareñas</a></li>
                    <hr>
                    <h1 class="fs-4 me-auto">Verduras</h1>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Brocolis</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Campo</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Chayotes</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Exoticos</a></li>
                    <li class="nav-item m-2"><a class="nav-link" href="#">Lugareños</a></li>

                </ul>

            </div>
            <div class="col-10">

            </div>

        </div>


    </div>

</body>

</html>

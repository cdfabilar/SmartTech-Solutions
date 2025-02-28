<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        🥬 Mapi Store 🍎
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-md bg-black sticky-top border-bottom">
        <div class="container d-flex">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">

                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto  w-100 d-flex align-items-center">
                        <li class="nav-item w-25"><a class="nav-link" href="{{ route('Landing') }}"><img src="{{ asset('IMG/Titulo.gif') }}" class="w-100" alt="..."></a></li>
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



        <img src="{{ asset('IMG/Logo.png') }}" class="w-25" alt="...">
        <h1 class="display-5 fw-bold fo-custom-1">Frutas y Verduras</h1>

        <div class="col-6 mx-auto">

            <p class="lead mb-4 txtcolor-custom-1">
                Esta es una tienda dedicada a la venta de productos frescos de frutas y Verduras
                por menudeo o mayoreo, la cual tiene como fin facilitar la compra de productos
                locales que sean frescos y desde la comodidad de su hogar
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                <button type="button" class="btn btn-success btn-lg px-4 gap-3">Mi Canasta</button>
                <button type="button" class="btn btn-outline-success btn-lg px-4">Registrarme</button>
            </div>

        </div>


    </div>

</body>

</html>

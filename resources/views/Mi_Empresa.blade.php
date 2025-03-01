@extends('layouts.app')

@section('content')


<div class="container-fluid bg-custom-2 text-center  min-vh-100">

    <div class="row d-flex">

        <div class="col-2 bg-custom-3 min-vh-100 position-fixed">

            <ul class="navbar-nav d-flex align-items-center">

                <img src="{{ asset('IMG/Logo.png') }}" class="w-75 m-3" alt="...">

                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Ventas</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Clientes</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Inventario</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Personal</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Sucursales</a></li>
                <li class="nav-item m-1 pt-1 w-100 border-top border-white btn btn-outline-dark"><a class="nav-link text-white" href="#">Reportes</a></li>

            </ul>

        </div>
        <div class="col-10 ms-auto p-4 text-center">
            <div class="row text-center">
                <div class="col-12 text-center fo-custom-1"> <span class="fs-1">Reporte de Ventas</span></div>
            </div>
            <div class="row">

            </div>
        </div>

    </div>


</div>

@endsection
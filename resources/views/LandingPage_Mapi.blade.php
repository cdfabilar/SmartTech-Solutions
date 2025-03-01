@extends('layouts.app')

@section('content')

<div class="container-fluid bg-custom-2 text-center  min-vh-100">

    <img src="{{ asset('IMG/Logo.png') }}" class="w-25" alt="...">
    <h1 class="display-5 fw-bold fo-custom-1">Optimizacion y Eficiencia</h1>

    <div class="col-6 mx-auto">

        <p class="lead mb-4 txtcolor-custom-1">
            Servicio de administracion de empresas pequeñas o medianas, con el cual
            podras monitorear y administrar tu negocio desde la comodidad de tu sofa.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

            <a class="btn bg-custom-1 btn-outline-dark btn-lg px-4 gap-3" href=" {{ route('Mi Empresa') }}">Mi Empresa</a>
            <button type="button" class="btn bg-custom-1 btn-outline-dark btn-lg px-4 gap-3">Registrarme</button>
        </div>

    </div>


</div>
@endsection
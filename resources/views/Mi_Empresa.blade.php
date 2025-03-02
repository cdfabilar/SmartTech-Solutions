@extends('layouts.app2')

@section('content')


<div class="container-fluid bg-custom-2 text-center  min-vh-100">

    <div class="row d-flex">

        <div class="col-10 ms-auto p-4 text-center">
            <div class="row text-center">
                <div class="col-12 text-center fo-custom-1"> <span class="fs-1">Reporte de Ventas</span></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 mx-auto">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Venta Total Febrero/2025</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$10,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="card mx-auto bg-custom-3 text-white" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal #1</h5>
                        <p class="card-text">Ubicada en la calle matamoros de villa victoria estado de mexico</p>
                        <a href="#" class="btn btn-primary">Mostrar</a>
                    </div>
                </div>
                <div class="card mx-auto bg-custom-3 text-white" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal #2</h5>
                        <p class="card-text">Ubicada en la calle lazaro cardenas villa victoria estado de mexico</p>
                        <a href="#" class="btn btn-primary">Mostrar</a>
                    </div>
                </div>
                <div class="card mx-auto bg-custom-3 text-white" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal #3</h5>
                        <p class="card-text">Ubicada en toluca estado de mexico en la calle colon-145</p>
                        <a href="#" class="btn btn-primary">Mostrar</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id_Venta</th>
                            <th scope="col">Fecha y Hora</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00000000001</td>
                            <td>20/02/2025 10:00 am</td>
                            <td>Dabid.M</td>
                            <td>Audifonos</td>
                            <td>$1000</td>
                        </tr>
                        <tr>
                            <td>00000000002</td>
                            <td>20/02/2025 10:00 am</td>
                            <td>David.M</td>
                            <td>Mouse</td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td>00000000003</td>
                            <td>20/02/2025 10:00 am</td>
                            <td>Dabid.M</td>
                            <td>Teclado</td>
                            <td>$800</td>
                        </tr>

                    </tbody>
                </table>

            </div>

        </div>

    </div>


</div>

@endsection

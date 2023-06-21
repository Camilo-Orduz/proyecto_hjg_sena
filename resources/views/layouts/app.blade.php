@extends('layouts.menu')
@section('content')
    @php
    use App\Models\user;
    $cantidadEmpleados = user::count();
    @endphp
            <div class="container">
                    <div class="row">
                        <div class="col" id="elemento">
                        Empleados <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg><br><br>  
                        <div class="elemntos-emp">
                        {{ $cantidadEmpleados }}
                        </div>
                        </div>
                        <div class="col" id="elemento">
                        Clientes <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg><br><br>
                        <div class="elemntos-emp">
                           # 
                        </div>
                        </div>
                        <div class="col" id="elemento">
                        Pedidos <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                            </svg><br><br>
                        <div class="elemntos-emp">
                            #
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Tabla con datos generales -->
                <div class="table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Nuevos Pedidos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Num pedido</th>
                        <th scope="col">Ciente</th>
                        <th scope="col">Estado pedido</th>
                            </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
@endsection
@section('styles')
<style>
    body{
        font-family: 'DM Sans', sans-serif;
        background-color: #F3F3F3 !important;
}
.texto-simple{
    justify-content: center!important;
    text-align: center;
    
}

.contenedores-img{
    background-color: aqua;
}
.ajuste{
    padding: 140px;
}
.contenedor-qsomos{
    margin-left: 15%;
}
.ropa-deportiva{
    margin-left: 15%;
    margin-top: 90px!important;
    margin-bottom: 90px;
}
</style>
@endsection
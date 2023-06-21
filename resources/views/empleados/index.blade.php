@extends('layouts.menu')
@section('content')
<div>
    <a class="btn btn-outline-dark" href="{{ route('crearEmpleado') }}">Registrar empleado</a>
    </div>
                <table class="table caption-top">
                <title>Usuarios</title>
                <div class="container">
    @foreach($empleados as $empleado)
        <div class="row">
        <div class="col-sm">
        <div class="card">
            <h3>{{ $empleado['nombresEmpleado'] }} {{$empleado['apellidosEmpleado'] }}</h3>
            <p>Número de identificacion : {{ $empleado['identificacionEmpleado']}}</p>
            <p>Correo: {{ $empleado['email'] }}</p>
            <a class="btn btn-dark" href="{{ route('detallesEmpleado', $empleado['identificacionEmpleado']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            </a>
        </div>
    </div>
    @endforeach
@endsection
@section('styles')
<style>
    .card {
    border: 1px solid black!important;
    padding: 10px;
    margin-bottom: 10px;
    width: 20rem;
    box-shadow: 3px 3px 10px;
    background-color: white!important;
}
.active {
    color: green;
}
.inactive {
    color: red;
}
h3{
    text-align: center!important;
}
body{
    font-family: 'DM Sans', sans-serif;
    background-color: #F3F3F3 !important;
}
.table {
    margin-top: 2rem;
    padding: 3rem;
}
.button-add-rep{
    margin-top: 3rem;
}
.container-form{
    padding-left: 13rem;
    padding-right: 16rem;
    padding-top: 1rem;
}
.credentials{
    background-color: #f0f7da;
    padding: 2rem;
    border-radius: 10px;
    border: solid 1px black;
    box-shadow: 3px 3px 8px;
}   

</style>
@endsection
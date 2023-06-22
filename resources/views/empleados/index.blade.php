@extends('layouts.menu')
@section('content')
<div>
    <a class="btn btn-outline-dark" href="{{ route('crearEmpleado') }}">Registrar empleado</a>
    </div>
    <br>
                <table class="table caption-top">
                <title>Usuarios</title>
                <div class="container">
                <div class="row">
    @foreach($empleados as $empleado)
        
        <div class="col-sm">
        <div class="card">
            <h3>{{ $empleado['nombresEmpleado'] }} {{$empleado['apellidosEmpleado'] }}</h3>
            <p>Número de identificacion : {{ $empleado['identificacionEmpleado']}}</p>
            <p>Correo: {{ $empleado['email'] }}</p>
            <a class="btn btn-info" href="{{ route('detallesEmpleado', $empleado['identificacionEmpleado']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            </a>
            <a class="btn btn-warning" id="button-shop" href="{{route('editarEmpleado', $empleado['identificacionEmpleado'])}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
            </a>
            <form class="formulario-eliminar" action="{{ route('eliminarEmpleado', $empleado['identificacionEmpleado']) }}" method="POST">
            @csrf
                @method('DELETE')
                <button class="btn btn-danger" id="button-shop" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    @endforeach
<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

       Swal.fire({
        title: 'Está seguro de eliminar?',
        text: "Está acción no se puede revertir !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.value) {
            this.submit();
        }
        });
    });

</script>
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
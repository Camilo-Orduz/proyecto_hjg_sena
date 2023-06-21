@extends('layouts.menu')
@section('content')
                <div class="login-info">
                    <div class="container-form">
        <form method="POST" class="credentials" action="{{ route('formEditarEmpleado', $empleado['identificacionEmpleado']) }}">
        @method('PUT')
        @csrf

        <div class="input-holder" >
        <h3 id="title">Editar Empleado</h3>
                <label for="">Tipo de Documento</label><br>
                <select name="tipoDocumentoId" id="">
                    @foreach($documentos as $documento)
                        <option value="{{ $documento['idTipoDocumento'] }}">{{ $documento['siglaDocumento']}}</option>
                    @endforeach
                </select>
                <br>
                <label for="exampleDataList" class="form-label">Identificación del Empleado</label><br>
                <input name="identificacionEmpleado" class="form-control" type="text" value="{{$empleado['identificacionEmpleado']}}"aria-label="default input example" required><br>
                <label for="exampleDataList" class="form-label">Nombres del Empleado</label><br>
                <input name="nombresEmpleado" class="form-control" type="text" value="{{$empleado['nombresEmpleado']}}"aria-label="default input example" required><br>
                <label for="exampleDataList" class="form-label">Apellidos del Empleado</label> 
                <input name="apellidosEmpleado" class="form-control" type="text" value="{{$empleado['apellidosEmpleado']}}"aria-label="default input example" required><br>
                <label for="exampleDataList" class="form-label">Correo</label> 
                <input name="email" class="form-control" type="text" value="{{$empleado['email']}}"aria-label="default input example" required><br>
            <center><button type="submit" class="btn btn-outline-dark" onclick="">Actualizar</button>
            <button type="" class="btn btn-outline-dark" onclick="goBack()">Volver</button></center>
        
@endsection
@section('styles')
<style>
    h3{
    text-align: center!important;
}
body{
    background-color: #F3F3F3!important;
    font-family: 'DM Sans', sans-serif;
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
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    border: solid 1px black;
    box-shadow: 3px 3px 8px;
}
</style>
@endsection
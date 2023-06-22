@extends('layouts.menu')
@section('content')
                <div class="col-lg-10">
                    <div class="content-container">
                    <h4>Tipo de Documento: </h4>
                    <p>{{ $empleado->tipo_documento->descripcionDocumento }}</p>
                    <h4>Nombres Empleado: </h4>
                    <p>{{ $empleado['nombresEmpleado'] }}</p>
                    <h4>Apellidos Empleado: </h4>
                    <p>{{ $empleado['apellidosEmpleado'] }}</p>
                    <h4>Teléfono Empleado: </h4>
                    <p>{{ $empleado['telefonoEmpleado'] }}</p>
                    <h4>Correo Empleado: </h4>
                    <p>{{ $empleado['email'] }}</p>
                    <center><button type="" class="btn btn-dark" onclick="goBack()">Volver</button></center>
                    <script>
                    function goBack() {
                        history.back();
                    }
                    </script>
                    </div>
                </div>
@endsection
@section('styles')
<style>
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

.col-lg-10{
    margin-top: 5%!important;
    border: 2px solid #000;
    border-radius: 15px;
    background: #fff;
    width: auto !important;
    margin: 0 10em;
    box-shadow: 3px 3px 8px;
}
.content-container{
    padding: 2rem;
}
</style>
@endsection
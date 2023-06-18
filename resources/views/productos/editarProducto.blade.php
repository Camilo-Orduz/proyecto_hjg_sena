@extends('layouts.menu')
@section('content')
                <div class="login-info">
                    <div class="container-form">
        <form method="POST" class="credentials" action="{{ route('actualizarProducto', $producto->idProducto )}}">
        @method('PUT')
        @csrf

        <div class="input-holder" >
        <h3 id="title">Editar Producto</h3> 
                <br><label for="exampleDataList" class="form-label">Nombre del producto</label> 
                <input name="nombreProducto" class="form-control" type="text" placeholder="Tipo de prenda" value="{{$producto['nombreProducto']}}"aria-label="default input example" required><br>
                <label for="exampleDataList" class="form-label">Descripción del producto</label> 
                <input class="form-control" type="text" placeholder="Describa el producto" value="{{$producto['descripcionProducto']}}" aria-label="default input example" name="descripcionProducto" required><br>
                <label for="exampleDataList" class="form-label">Categoria de producto</label> 
                <input class="form-control" type="text" placeholder="Tipo de prenda" value="{{$producto['categoriaProducto']}}" aria-label="default input example" name="categoriaProducto" required><br>
                <label for="exampleDataList" class="form-label">Precio Unitario</label> 
                <input class="form-control" type="Number" placeholder="Precio del producto en COP" value="{{$producto['precioProducto']}}" aria-label="default input example" name="precioProducto" required><br>
                <label for="exampleDataList" class="form-label">Cantidad en inventario</label> 
                <input class="form-control" type="Number" placeholder="Cantidad existente del producto" value="{{$producto['stockProducto']}}" aria-label="default input example" name="stockProducto" required><br>
                <label for="exampleDataList" class="form-label">Talla de la prenda</label> 
                <input class="form-control" type="text" placeholder="Medida (S, M, L, XL...)" value="{{$producto['tallaProducto']}}" aria-label="default input example" name="tallaProducto" required><br>
                <div class="mb-3">
                <label for="formFile" class="form-label">Seleccione la imagen (500 x 500)</label>
                <input class="form-control" type="file" id="formFile" name="imagenProducto" required>
                </div>
            <center><button type="submit" class="btn btn-outline-dark" onclick="">Actualizar</button>
            <button type="" class="btn btn-outline-dark" onclick="goBack()">Volver</button></center>
            <script>
                function goBack() {
                    window.history.back();
                }
                </script>
            
            <script>
            function enviarVerificacion() {
                                        var respuesta = confirm("¿Estás seguro de realizar esta verificación?");
  
                                        if (respuesta) {
                                            alert("Editado exitosamente");
                                        } else {
                                            alert("Edición cancelada");
                                            return
                                        }                                   
                                        }
                                        </script>
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
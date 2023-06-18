@extends('layouts.menu')
@section('content')
                <div class="login-info">
                    <div class="container-form">
        <form method="POST" class="credentials" action="{{ route('crearProducto') }}">
        @csrf
        <div class="input-holder" >
        <h3 id="title">Registrar Producto</h3> 
                <br><label for="exampleDataList" class="form-label">Nombre del producto</label> 
                <input name="nombreProducto" class="form-control" type="text" placeholder="Tipo de prenda" aria-label="default input example" required><br>
                <label for="exampleDataList" class="form-label">Descripción del producto</label> 
                <input class="form-control" type="text" placeholder="Describa el producto" aria-label="default input example" name="descripcionProducto" required><br>
                <label for="exampleDataList" class="form-label">Categoria de producto</label> 
                <input class="form-control" type="text" placeholder="Tipo de prenda" aria-label="default input example" name="categoriaProducto" required><br>
                <label for="exampleDataList" class="form-label">Precio Unitario</label> 
                <input class="form-control" type="Number" placeholder="Precio del producto en COP" aria-label="default input example" name="precioProducto" required><br>
                <label for="exampleDataList" class="form-label">Cantidad en inventario</label> 
                <input class="form-control" type="Number" placeholder="Cantidad existente del producto" aria-label="default input example" name="stockProducto" required><br>
                <label for="exampleDataList" class="form-label">Estado del producto</label> 
                <input class="form-control" type="text" placeholder="Tipo de prenda" aria-label="default input example" name="estadoProducto" required><br>
                <label for="exampleDataList" class="form-label">Talla de la prenda</label> 
                <input class="form-control" type="text" placeholder="Medida (S, M, L, XL...)" aria-label="default input example" name="tallaProducto" required><br>
                <label for="formFile" class="form-label">Seleccione la imagen (500 x 500)</label>
                <input class="form-control" type="file" id="formFile" name="imagenProducto" required><br><br>
      <center><button type="submit" class="btn btn-outline-success">Registrar Producto</button></center>
      </div>
      </form>
      </div>
      </div>
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
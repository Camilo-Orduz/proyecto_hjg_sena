@extends('layouts.menu')
@section('content')
            <!-- Mostrar el mensaje de error si existe -->
            @if ($errors->has('productoId'))
                <div class="alert alert-danger">
                    {{ $errors->first('productoId') }}
                </div>
            @endif
                <div class="login-info">
                    <div class="container-form">

        <form method="POST" class="credentials" action="{{ route('editarEntrada', $entrada->idEntrada) }}">
        @method('PUT')
        @csrf

        <div class="input-holder" >
        <h3 id="title">Entrada</h3> 
                <br>
                <label for="exampleDataList" class="form-label">Nombre del Producto</label> 
                <select name="productoId" id="" require class="form-select">
                    <option value="{{ $entrada['productoId'] }}">{{ $entrada -> producto->nombreProducto }} </option>
                    @foreach($productos as $producto)
                        @if ($producto['idProducto'] != $entrada -> producto->idProducto)
                            <option value="{{ $producto['idProducto'] }}">{{ $producto['nombreProducto'] }} </option>
                        @endif   
                    @endforeach
                </select>
                <br>
                <label for="exampleDataList" class="form-label">Cantidad</label> 
                <input class="form-control" value="{{ $entrada->cantidadProducto }}" type="number" placeholder="Cantidad" aria-label="default input example" name="cantidadProducto" required><br>
                <label for="exampleDataList" class="form-label">Detalles entrada</label> 
                <input class="form-control" value="{{ $entrada->detallesEntrada}}" type="text" placeholder="Detalles acerca de la entrada a inventario del producto" aria-label="default input example" name="detallesEntrada" required><br>
      <center><button type="submit" class="btn btn-dark">Editar entrada</button></center>
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
    padding-top: 5rem;
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
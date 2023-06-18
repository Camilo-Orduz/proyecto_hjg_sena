@extends('layouts.menu')
@section('content')


                <div class="content-space">
                    <br>
                <div class="row col-md-12" id="articulos-img">
                    <div class="col-md-6" id="articulos">
                        <center><h1>Producto</h1></center>
                        <br><br><center><img src="/img/img/{{ $producto['imagenProducto'] }}" class="img-fluid rounded" alt="Uniforme" class="hover-img" style="height:300px!important; width:300px!important;"></center><br>
                        <h5>Nombre producto:</h5><p>{{$producto['nombreProducto']}}</p>
                        <h5>Descripcion producto:</h5><p>{{$producto['descripcionProducto']}}</p>
                        <h5>Talla producto:</h5><p>{{$producto['tallaProducto']}}</p>
                        <h5>Categoria producto:</h5><p>{{$producto['categoriaProducto']}}</p>
                        <h5>Stock de producto:</h5><p>{{$producto['stockProducto']}}</p>
                        <h5>Precio producto: </h5><p>$ {{$producto['precioProducto']}}</p>
                        <h5>Estado producto:</h5><p>{{$producto->status}}</p>
                    </div>

                </div>
        </div>
@endsection
@section('styles')
<style>
body{
    background-color: #F3F3F3!important;
    font-family: 'DM Sans', sans-serif;

}

.button-space{
    margin-left: 42%;
    margin-top: 2rem;

}
#articulos-img{
    justify-content: center;
}
#contenedor-articulos{
    margin-top: 3rem;
    border: solid 1px black;
}
h5,p, h1{
color: black;
}

img{
    box-shadow: 1px 1px 15px;
}

#articulos{
    font-size: 16px;
    padding: 2rem;
    background-color: white;
    border-radius: 13px;
    box-shadow: 3px 3px 13px;
}
</style>
@endsection
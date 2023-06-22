@extends('layouts.menu')
@section('content')
                <div>
                    <center><h2>Selección de productos del pedido</h2></center>
                    <br>
                    </div>
                        <!-- Sesión de imagenes únicamente imagenes 500x500 -->
                        <div class="container-articles" id="contenedor-articulos">
                            @foreach($productos as $producto)
                            <hr>
                            <div class="row col-md-12" id="articulos-img">
                                <div class="col-md-3" id="articulos">
                                    <img src="../img/img/{{ $producto['imagenProducto'] }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-3" id="articulos">
                                    <ul>
                                        <li><strong>Nombre del Producto: </strong> {{ $producto['nombreProducto'] }}</li>
                                        <li><strong>Descripcion del Producto: </strong>{{ $producto['descripcionProducto'] }}</li>
                                        <li><strong>Talla de Producto: </strong>{{ $producto['tallaProducto'] }}</li>
                                        <li><strong>Status: </strong>{{ $producto->status }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-3" id="articulos">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                <form action="{{ route('formpedidodetalle')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idProducto" value="{{ $producto['idProducto'] }}">
                                    <input type="hidden" name="nombreProducto" value="{{ $producto['nombreProducto'] }}">
                                    <input type="hidden" name="stockProducto" value="{{ $producto['stockProducto'] }}">
                                    <input type="hidden" name="precioProducto" value="{{ $producto['precioProducto'] }}">
                                    <input type="hidden" name="imagenProducto" value="{{ $producto['imagenProducto'] }}">
                                    <button class="btn btn-success" id="button-shop" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                    </button>
                                </form>

                                </div>
                                </div>
                            </div><br>
                            @endforeach
                        </div>
                <!--Fin del cuadro -->
                </div>
            </div>
        </div>
    </div>
</div>

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
    background-color: #f0f7da;
    padding: 2rem;
    border-radius: 10px;
    border: solid 1px black;
    box-shadow: 3px 3px 8px;
}
.formulario-eliminar{
    padding-right: 3rem!important;
}
</style>
@endsection
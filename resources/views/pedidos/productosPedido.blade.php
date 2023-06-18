@extends('layouts.menu')
@section('content')
                <div>
                    <center><h2>Productos</h2></center>
                    
                    </div>
                        <!-- Sesión de imagenes únicamente imagenes 500x500 -->
                        <div class="container-articles" id="contenedor-articulos">
                            @foreach($productos as $producto)
                            <hr>
                            <div class="row col-md-12" id="articulos-img">
                                <div class="col-md-3" id="articulos">
                                    <img src="img/img/{{ $producto['imagenProducto'] }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
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
                                    <button class="btn btn-danger" id="button-shop" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </button>
                                </form>

                                </div>
                                </div>
                            </div>
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
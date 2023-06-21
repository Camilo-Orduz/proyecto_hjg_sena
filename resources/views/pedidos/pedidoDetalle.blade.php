@extends('layouts.menu')
@section('content')
<section>
    <!--Inicia ciclo-->
    <div class="content-page">
    <center><div class="button-sspace" style="margin-bottom: 2em;">
        <a href="{{ route('selectProductos')}}"><button type="button" class="btn btn-outline-dark">Agregar Otro Producto</button></a>
        <a href="/productos/crear"><button type="button" class="btn btn-outline-dark">Crear Pedido</button></a>
    </div></center>
    <div class="d-flex">
      @foreach ($datosFormulario as $dato)
      <div class="col-md-3" id="articulos">
        <img src="../img/img/{{ $dato['imagenProducto'] }}" alt="Imágen del producto" class="img-fluid rounded">
      </div>
      <div class="flex-grow-1 ms-3">
        <h4>Id producto: </h4>
        <p>{{ $dato['idProducto'] }}</p>
        <h4>Nombre del producto: </h4>
        <p>{{ $dato['nombreProducto'] }}</p>
        <h4>Stock Producto: </h4>
        <p>{{ $dato['stockProducto'] }}</p>
        <h4>Precio unitario: </h4>  
        <p>{{ $dato['precioProducto'] }}</p>      
      </div>
      <form action="">
      <div class="mb-3">
      <label for="subtotal" class="form-label">Cantidad</label>
      <input class="form-control cantidad" placeholder="Cantidad del producto" type="number"  id="cantidad_{{ $loop->iteration}}" name="cantidad_{{ $loop->iteration}}">
      <input type="hidden" value="{{ $dato['precioProducto'] }}" id="valor_producto_{{ $loop->iteration}}">
      <label for="subtotal" class="form-label">Subtotal</label>
      <input name ="subtotal_{{ $loop->iteration}}" class="form-control" placeholder="" value="{{ $dato['precioProducto']}}" id="subtotal_{{ $loop->iteration}}" readonly>
      </div>
      <input type="hidden" id="numero_productos" value="{{ count($datosFormulario) }}">
      </form>
      <br>
      <br>
      <br>
      @endforeach

</div>
</div>
<!--termina ciclo-->
</section>

<script
  src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script>
     $('.cantidad').keyup(function(){
  
      var cantidad_productos = $('#numero_productos').val();
      var total = [0];
         
           for(var i= 1; i<= cantidad_productos; i++){
          
            var valor_producto = $('#valor_producto_'+i).val();
            var cantidad = $('#cantidad_'+i).val();
            //console.log('producto: '+i+ ' - valor '+ valor_producto);
            //console.log('producto: '+i+ ' - cantidad '+cantidad);
            result = parseInt(valor_producto) * parseInt(cantidad);
            total.push(result);
            
            $('#subtotal_'+i).val(total[i]);

           }

           console.log(total);
     });
  </script>
@endsection
@section('styles')
<style>
    body{
        background-color: #F3F3F3!important;
    font-family: 'DM Sans', sans-serif;
    }
    .content-page{
        margin: 10vh 5rem;
    }
</style>
@endsection
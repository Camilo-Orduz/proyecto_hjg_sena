@extends('layouts.menu')
@section('content')
<section>
    <!--Inicia ciclo-->
    <div class="content-page">
  
    <label for="">Fecha de radicación del pedido</label>
    <input value="{{ $pedido['fechaRadicacionPedido'] }}" name="fechaRadicacionPedido" id="startDate" class="form-control" type="datetime" readonly/><br>

    <label for="">Identificación del Empleado</label>
    <input value="{{ $pedido['empleadoIdentificacion'] }}" name="empleadoIdentificacion"type="number" value="{{ Auth::user()->identificacionEmpleado }}" readonly><br>
    <br>  
    <label for="">Total Pedido $</label>
    <input value="{{ $pedido['totalPedido'] }}" name="totalPedido" type="number" id="costo_total" readonly>
      <br>
      <br>
      @foreach ($pedido['pedido_detalle'] as $detalle)
      <hr>
      <div class="d-flex">
      <div class="col-md-3" id="articulos">
        <img src="../../img/img/{{ $detalle->producto->imagenProducto }}" alt="Imágen del producto" class="img-fluid rounded">
      </div>
      <div class="flex-grow-1 ms-3">
        <h4>Nombre del producto: </h4>
        <p>{{ $detalle->producto->nombreProducto }}</p>
        <h4>Talla del producto: </h4>
        <p>{{ $detalle->producto->tallaProducto}}</p>
        <h4>Precio unitario: </h4>  
        <p>$ {{ $detalle->producto->precioProducto }}</p>
        <h4>Cantidad del producto: </h4>
        <p>{{ $detalle['cantidadProducto'] }}</p>
        <h4>Subtotal: </h4>     
        <p>$ {{ $detalle['subTotal'] }}</p> 
      </div>
    
</div>
@endforeach
<!--termina ciclo-->
</section>
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
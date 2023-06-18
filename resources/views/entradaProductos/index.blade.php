@extends('layouts.menu')
@section('content')
                <div>
    <a class="nav-link" href="{{ route('formEntrada') }}"><button type="button" class="btn btn-outline-dark">Crear Entrada</button></a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Cantidad de producto</th>
      <th scope="col">Detalles</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($entradas as $entrada)
    <tr>

      <th scope="row">{{ $entrada -> producto->nombreProducto }}</th>
      <td>{{ $entrada -> cantidadProducto }}</td>
      <td>{{ $entrada -> detallesEntrada }}</td>
      <td><form class="formulario-eliminar" action="{{ route('eliminarEntrada', $entrada->idEntrada) }}" method="POST">
            @method('DELETE')
            @csrf
            <a href="{{ route('formEditar', $entrada->idEntrada) }}" class="btn btn-sm btn-info">Editar</a>
            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
        </form></td>
        @endforeach
    </tr>
  </tbody>
    </table>
    <div class='container'>


    </div>
                <!--Fin del cuadro -->
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('eliminar') == 'ok')
    <script>
            Swal.fire(
            'Eliminado!',
            'Eliminado correctamente !',
            'Exito'
            )
    </script>
@endif



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
    body{
      font-family: 'DM Sans', sans-serif;
        background-color: #F3F3F3 !important;
    }
</style>
@endsection
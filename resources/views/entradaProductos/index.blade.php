<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/articles.css') }}">
    <link rel="stylesheet" href="{{ url('libs/libs/bootstrap-5.0.2-dist/css/bootstrap.css') }}">  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Menu lateral   -->
<div class="container-fluid" >
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100" style="background-color:#f0f7da;">
                <a href="{{url('/inicio')}}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline" style="color:black;">Panel</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <a href="{{url('inicio')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="{{url('inicio-articulos')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Articulos</span></a>
                    </li>
                    <li>
                        <a href="{{url('inicio-pedidos')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Pedidos</span></a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Ordenes en proceso</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Ventas</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1" style="color:black;">Name_User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
                <!-- contenido interno -->
                <div>
    <a class="nav-link" href="{{ route('formEntrada') }}"><button type="button" class="btn btn-success">Crear Entrada</button></a>
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
</body>
</html>

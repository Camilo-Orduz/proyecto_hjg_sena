<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/entrada.css') }}">
    <link rel="stylesheet" href="{{ url('libs/libs/bootstrap-5.0.2-dist/css/bootstrap.css') }}">    
</head>
<body>
    <!-- Menu lateral   -->
<div class="container-fluid" >
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100" style="background-color:#f0f7da;">
                <a href="{{route('dashboard')}}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline" style="color:black;">Panel</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <a href="{{route('dashboard')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline" style="color:black;">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="{{route('inicio-articulos')}}" class="nav-link px-0 align-middle">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" class="btn btn-outline-success">Logout</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col py-3">
                <!--Contenido-->
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
                <select name="productoId" id="" require>
                    <option value="{{ $entrada['idEntrada'] }}">{{ $entrada -> producto->nombreProducto }} </option>
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
      <center><button type="submit" class="btn btn-outline-success">Editar entrada</button></center>
      </div>
      </form>
      </div>
      </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
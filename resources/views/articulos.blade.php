<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/articles.css') }}">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" class="btn btn-outline-success">Logout</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col py-3">
                <!-- contenido interno -->
                <center><h2>Articulos</h2></center>
                <div class="button-space">
                    <div class="col-md-5" >
                    <button type="button" class="btn btn-outline-success">Agregar</button>
                    <button type="button" class="btn btn-outline-success">Editar</button>
                    <button type="button" class="btn btn-outline-success">Eliminar</button>
                    </div>
                    </div>
                        <!-- Sesión de imagenes únicamente imagenes 500x500 -->
                        <div class="container-articles" id="contenedor-articulos">
                            <div class="row col-md-12" id="articulos-img">
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-1art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-2art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-3art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                            </div>
                        </div>
                        <div class="container-articles" id="contenedor-articulos">
                            <div class="row col-md-12" id="articulos-img">
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-4art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-5art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                                <div class="col-md-3" id="articulos">
                                    <img src="{{url('img/img/uniforme-6art.jpg') }}" class="img-fluid rounded" alt="Uniforme" class="hover-img">
                                    <center>Cantidad:</center>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
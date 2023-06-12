<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/lobbys.css') }}">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" class="btn btn-outline-success">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <!-- Imagenes de el lobby -->
            <div class="container">
                    <div class="row">
                        <div class="col" id="elemento">
                        Empleados <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg><br><br>  
                        <div class="elemntos-emp">
                            # 
                        </div>
                        </div>
                        <div class="col" id="elemento">
                        Clientes <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg><br><br>
                        <div class="elemntos-emp">
                           # 
                        </div>
                        </div>
                        <div class="col" id="elemento">
                        Pedidos <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                            </svg><br><br>
                        <div class="elemntos-emp">
                            #
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Tabla con datos generales -->
                <div class="table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Nuevos Pedidos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Num pedido</th>
                        <th scope="col">Ciente</th>
                        <th scope="col">Estado pedido</th>
                            </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td>00000</td>
                        <td>Name</td>
                        <td>True/False</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 
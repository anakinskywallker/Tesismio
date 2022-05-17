<?php 
	session_start();
	require_once "php/conexion.php";
	$conexion=conexion();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="aplicacion web para control y manejo de una panaderia" content="">
    <meta name="Jorge muñoz" content="">

    <title>Lista</title>

    <!-- menu CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- tipo de fuentes -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- este es para los iconos -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- CSS  Principal -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- calendario -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
            $("#datepicker1").datepicker();
        });
    </script>

</head>

<body id="page-top">

    <!-- menu-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.html">Rico pan</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">

                <!--inicio notificaciones-->
                <ul class="navbar-nav text-uppercase ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="AdminP.php">Reportes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Insumos.php">Insumos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Empleados.php">Empleados</a>
                    </li>
                    
                    

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline "><?php echo $_SESSION["nombre_usuario"]?></span>
                            <img class="img-profile rounded-circle" src="../img/team/2 - copia.jpg">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../index.html" data-target="#logoutModal">Cerrar Sesión</a>
                            <!-- aqui hay que enviar una señal para cerrar la sesion-->
                        </div>
                    </li>


                </ul>

            </div>

        </div>
    </nav>

    <!---->
    <section class="bg-light">
        <div class=" container">
            <!---->
            <div class="col-12 col-lg-12 text-center">
                <h3 class="section-heading text-uppercase ">Agregar/Editar</h3>
            </div>

            <div class="was-validated row">
                <!--tabla -->
                <div class="col-md-7 table-wrapper-scroll-y my-custom-scrollbarformulario ">
                    <table class="table table-striped " style="cursor: poiter;">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Clase</th>
                                <th scope="col">Cantidad</th>
                                <th>Opciones </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                    los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>

                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                            los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>

                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                            los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>
                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                            los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>

                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                                    los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>
                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                            los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Quitar</td>

                            </tr>
                            <tr>
                                <th>
                                    tostadas
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                            los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>Editar</td>
                                <td>Suspender</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1">
                </div>
                <!--Formulario-->
                <div class="col-md-4 my-3">
                    <form class="was-validated">
                        <!--Nombre -->
                        <div class="row mb-2">
                            <div class="class col-md-3 ">
                                <h6>Nombre:</h6>
                            </div>
                            <div class=" col-md-9">
                                <input type="text" class="form-control  " placeholder="Nombre" required>
                            </div>
                        </div>
                        <!--Tipo-->
                        <div class="class row">
                            <div class="col-md-3 mb-2">
                                <button id="btnGroupDrop1" type="button" class=" btn btn-secondary dropdown-toggle "
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                                    Tipos
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">pan</a>
                                    <a class="dropdown-item" href="#">queso</a>
                                    <a class="dropdown-item" href="#">bebidas</a>
                                    <a class="dropdown-item" href="#">desayunos</a>
                                </div>
                            </div>
                            <div class=" col-md-9">
                                <input type="text" class="form-control  " placeholder="Nombre" required>
                            </div>
                        </div>
                        <!--clase-->
                        <div class="class row">
                            <div class="col-md-3 mb-2">
                                <button id="btnGroupDrop" type="button" class=" btn btn-secondary dropdown-toggle "
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                                    clase
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                    <a class="dropdown-item" href="#">Fabricados</a>
                                    <a class="dropdown-item" href="#">Insumos</a>
                                    <a class="dropdown-item" href="#">Reventa</a>

                                </div>
                            </div>
                            <div class=" col-md-9">
                                <input type="text" class="form-control  " placeholder="Nombre" required>
                            </div>
                        </div>
                        <!--INsumo-->
                        <div class="class row">
                            <div class=" col-md-1 mb-2">
                                <button id="btnGroupDrop1" type="button" class=" btn btn-secondary dropdown-toggle "
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                                    Insumos
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <div class="table-wrapper-scroll-y my-custom-scrollbarProd  ">
                                        <a class="dropdown-item" href="#">Fabricados</a>
                                        <a class="dropdown-item" href="#">Insumos</a>
                                        <a class="dropdown-item" href="#">Reventa</a>
                                        <a class="dropdown-item" href="#">Reventa</a>
                                        <a class="dropdown-item" href="#">Reventa</a>

                                    </div>
                                </div>
                            </div>
                            <div class="class col-md-3"></div>
                            <div class=" col-md-8">
                                <input type="text" class="form-control  " placeholder="Nombre" required>
                            </div>
                        </div>
                        <!--Cargar imagen-->
                        <div class="class row">
                            <div class="col-md-12 mb-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="name" required>
                                    <label class="custom-file-label" for="name">Cargar Imagen...</label>
                                    <div class="invalid-feedback">No hay ninguna imagen cargada</div>
                                </div>
                            </div>
                        </div>
                        <!--Guardar-->
                        <div class="mx-5 col-md-4">
                            <button type="button" class="btn btn-outline-secondary">Guardar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Copyright &copy; Rico pan 2019</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--para la grafica-->
    <script src="../vendor2/chart.js/Chart.js"></script>
    <script src="../vendor2/otro/demo/chart-area-demo.js"></script>
    <script src="../vendor2/otro/demo/chart-pie-demo.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
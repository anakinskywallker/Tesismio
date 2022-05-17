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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

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
    <section class="bg-light" id="portfolio">
        <div class=" container">
            <!---->
            <div class="col-12 col-lg-12 text-center">
                <h3 class="section-heading text-uppercase ">Insumos</h3>
            </div>
            <!---->

            <form class="was-validated">
                <!--Botones Inicio -->
                <div class="row mb-2">
                    <div class="col col-md-6 mb-2 row">

                        <div class="mx-1">
                            <button type="button" class="btn btn-secondary ">opcion??</button>
                        </div>

                        <button id="btnGroupDrop2" type="button" class=" btn btn-secondary dropdown-toggle "
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                            Tipos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGrouDrop2">
                            <a class="dropdown-item" href="#">pan</a>
                            <a class="dropdown-item" href="#">queso</a>
                            <a class="dropdown-item" href="#">bebidas</a>
                            <a class="dropdown-item" href="#">desayunos/almuezos</a>
                        </div>
                    </div>

                    <div class="col-md-2"></div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <input type="search" class="form-control  " placeholder="No Factura">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-wrapper-scroll-y my-custom-scrollbarProd ">
                    <!--tabla facturas-->
                    <table class="table table-striped" style="cursor: pointer;">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Clase</th>
                                <th scope="col">Cantidad</th>
                                <th> </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>Suspender
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                        los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>Suspender
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                        los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                        los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                                los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>editar
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>
                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                        los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <a data-toggle="modal" href="#generar">totadas</a>
                                    </div>
                                </th>

                                <td>Pan</td>
                                <td>Fabricados</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                        los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>200 </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-edit fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" role="button">
                                        <i class="fas fa-folder-minus fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <a class="text-dark ">Oprime el boton para ver mas información</a>
        </div>
    </section>

    <!-- modal Solo para Productos ya que para insumos es in-necesario -->

    <div class="modal  fade" id="generar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h4 class="text-">Informacion Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  ">
                    <div class=" mb-3 " style="max-width: 940px;">

                        <div class=" row no-gutters">
                            <div class="shadow-lg card col-md-4 modalpersonal">
                                <div class=" my-3 col-md-12 col-10 ">
                                    <img src="../img/imag/almojabana.jpg" class=" card-img rounded-circle" alt="...">
                                    <h6 class="my-2 text-center">almojabana </h6>
                                    <h6 class="my-2 text-center"> </h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <div>
                                        <h4 class="card-title">insumos</h4>
                                        <table>

                                            <body class="border1">
                                                <tr>
                                                    <td>
                                                        <h6 class="mx-0">Azucar 50gr</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mx-4">Arina2 50gr</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="mx-0">Arina1 50gr</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mx-0">Arina2 50gr</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="mx-0">Arina1 50gr</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mx-0">Arina2 50gr</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="mx-0">Arina1 50gr</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mx-0">Arina2 50gr</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="mx-0">Arina1 50gr</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mx-0">Arina2 50gr</h6>
                                                    </td>
                                                </tr>
                                            </body>
                                        </table>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
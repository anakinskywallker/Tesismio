@@ -1,348 +0,0 @@
<?php
	session_start();
	include 'conectar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pasteleria</title>

    <!-- menu CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- tipo de fuentes -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- este es para los iconos -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- CSS  Principal -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- calendario -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../librerias/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

    <script src="js/funciones.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
    <script>
        $(function() {
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
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">

                <!--inicio notificaciones-->
                <ul class="navbar-nav text-uppercase ml-auto ">
                    
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="pastelero.php">Pasteleria</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="panadero.php">Panaderia</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline "><?php echo $_SESSION["nombre_usuario"] ?></span>
                            <img class="img-profile rounded-circle" src="../img/team/2 - copia.jpg">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../Login/cerrar_sesion.php" data-target="#logoutModal">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tabla de productos -->
    <section class="bg-light" id="portfolio">
        <div class=" container">
            <!---->
            <form class="was-validated row">
                <!--Seccion productos -->
                <div class="list-group col-md-7 col-sm-12 col-12 mx-1 my-custom-scrollbarList">
                    <button type="button" class="list-group-item list-group-item-action col-ms-5" href="#productos" data-toggle="modal">
                        <li class="media">
                            <img src="../img/imag/cafenegro.jpg" class="col-5 col-md-3 col-sm-3 mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 my-4 mb-4">Ejemmplo
                            </div>
                        </li>
                    </button>
                    
                    <button type="button" class="list-group-item list-group-item-action col-ms-5" href="#productos" data-toggle="modal">
                        <li class="media">
                            <img src="../img/imag/cafenegro.jpg" class="col-5 col-md-3 col-sm-3 mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 my-4 mb-4">Ejemmplo
                            </div>
                        </li>
                    </button>

                </div>
                <!--Seccion tablas-->
                <div class="class col-md-4 col-12">
                    <!-------tabla facturas------------->
                    <div class="table-wrapper-scroll-y my-custom-scrollbarProductos  col-md-12 col-sm-12 col-12">
                        <div id="tabla_Facturacion"></div>
                    </div>
                    <!-------tabla tortas------------->
                    <div class="classs col-md-7"></div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbarProductos col-md-12 col-12">
                        <div id="tabla_tortas"></div>
                    </div>
                </div>


            </form>
        </div>
        <br>
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





    <!---------------------------------------------------Modal agregar Pruduccion--------------------------------------------------------->
    <div class="modal fade" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header row">
                    <h3 class="mx-5 section-heading text-uppercase col-3">Ingreso Producción</h3>
                    <button type="button" class="close col-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="">
                        <!---->
                        <div class="col-12 col-md-12 mx-4 text-center">

                        </div>
                        <form class="was-validated">
                            <!--Botones Inicio -->
                            <div class=" row no-guters ">
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <span class="mx-0 col-md-12">Cantidad de panes:</span>
                                        <input type="number" id="nombreusuario" class="form-control  " placeholder="Cantidad del producto" required>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="btnDeshabilitar" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="btnDeshabilitar">Ingresar por
                                            unidad</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="btnHabilitar" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="btnHabilitar">Ingresar por
                                            bandejas</label>
                                    </div>

                                    <div class="input-group col-md-9">
                                        <span class="mx-0 col-md-12">Cantidad de bandeja:</span>
                                        <input type="number" id="nombre" class="form-control  " placeholder="Cantidad del producto" required>
                                    </div>
                                </div>

                            </div>

                            <div class=" row no-guters">
                                <div class="col-md-2 col-2 "></div>
                                <div class=" col-md-10 col-5 mb-2">
                                    <button type="button" data-dismiss="modal" id="cajero" class="mx-4 col-md-6 btn btn-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------FIN Modal agregar produccion--------------------------------------------------------->

    <!----------Modal edicion de productos------------------->
    <div class="modal fade" id="Edicion2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">

                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase ">Tostadas</h3>
                    <!--Obtener dato-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <div class="">
                        <form class="was-validated">
                            <!--Botones Inicio -->
                            <div class=" row no-guters ">
                                <div class="col-md-12 col-12 mb-2 my-2 mx-5">
                                    <div class="input-group col-md-9 col-10">
                                        <span class="col-md-12">Cantidad Actual de panes:</span>
                                        <input type="number" id="nombreusuario" class="form-control  " placeholder="Cantidad del producto" required>
                                    </div>
                                    <div class="input-group col-md-9 col-10">
                                        <span class="col-md-12">Nueva Cantidad de panes:</span>
                                        <input type="number" id="nombreusuario" class="form-control  " placeholder="Cantidad del producto" required>
                                    </div>
                                    <div class="input-group col-md-9 col-10">
                                        <span class="col-md-12">Observación:</span>
                                        <textarea class="form-control" aria-label="With textarea" placeholder="nota: la informacion a editar sera aprobada por el administrador" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=" row no-guters">
                                <div class="col-md-2 col-2 "></div>
                                <div class=" col-md-10 col-5 mb-2">
                                    <button type="button" data-dismiss="modal" id="cajero" class="mx-4 col-md-6 btn btn-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal-->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--para la grafica-->
    <script src="../vendor2/chart.js/Chart.js"></script>
    <script src="../vendor2/otro/demo/chart-area-demo.js"></script>
    <script src="../vendor2/otro/demo/chart-pie-demo.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $("#nombre").prop("disabled", true);
            $("#btnHabilitar").click(function() {
                $("#nombre").prop("disabled", false);
            });

            $("#btnDeshabilitar").click(function() {
                $("#nombre").prop("disabled", true);
            });
        });
    </script>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla_Facturacion').load('componentes/tablaFactura.php');

    });
    $(document).ready(function() {
        $('#tabla_tortas').load('componentes/tabla_tortas.php');

    });
    $('#actualizar').click(function() {
        actualizaDatos();
    });
    $('#cajero').click(function() {
        preguntarSiNo2(2)
    });
    $('#panadero').click(function() {
        preguntarSiNo2(3)

    });
</script>
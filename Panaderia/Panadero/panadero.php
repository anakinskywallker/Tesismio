<?php
session_start();
require_once "../Administrador/php/conexion.php";
$conexion = conexion();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panadero</title>

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
                        <a class="nav-link js-scroll-trigger" href="encargos.php">Encargos Pasteleria</a>
                    </li>
                    
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

    <!------------------------------------------ Tabla de productos ------------------------>
    <section class="bg-light" id="portfolio">
        <div class=" container">
            <!---->
            <form class="was-validated row">
                <!--Seccion productos -->

                <div class="list-group col-md-5 col-sm-12 col-12 mx-1 my-custom-scrollbarList">
                <?php 
                $sql ="SELECT  *  FROM productos WHERE (PRO_TIPO = 6 OR PRO_TIPO = 5 OR PRO_TIPO = 4 OR PRO_TIPO = 3) AND (PRO_CLASE = 1)";
                $result1 = mysqli_query($conexion, $sql);
                if (mysqli_num_rows($result1) > 0){
                    while($row = mysqli_fetch_assoc($result1)){
                        $id = $row['PRO_ID'];
                        $foto = $row['PRO_FOTO'];
                        $nombre = $row['PRO_NOMBRE'];
                        $precio = $row['PRO_VENTA'];
                 ?>
                     <button type="button" class="list-group-item list-group-item-action col-ms-5" href="#productos" data-toggle="modal" onclick="sacarid('<?php echo $id; ?>')">
                        <li class="media">
                        <img src="../img/<?php echo $foto;?>" class="col-5 col-md-3 col-sm-3 mr-3" alt="...">
                            <div class="media-body">
                            <h5 class="mt-0 my-4 mb-4"><?php echo $nombre;  ?>  
                            </div>
                        </li>
                    </button>

                <?php 
                     }
                    }
                ?>                    
                </div>
                <!--Seccion tablas-->
                <div class="class col-md-6 col-12">
                    <!-------------------------------------------------------------Tabla Lista de productos -------------------------------------------------------------------->
                    <div class="table-wrapper-scroll-y my-custom-scrollbarProductos  col-md-12 col-sm-12 col-12">
                        <div id="tabla_producion"></div>
                    </div>
                <!-------tabla tortas------------->
                    <!--   <div class="classs col-md-7"></div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbarProductos col-md-12 col-12">
                        <div id="tabla_tortas"></div>
                    </div>-->
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

                                        <span class="mx-0 col-md-12">Cantidad de Bandejas:</span>
                                        <input type="number" id="numero_bandejas" class="form-control  " placeholder="Cantidad del producto" required >
                                    </div>
                                    <div class="input-group col-md-9">
                                        <span class="mx-0 col-md-12">Cantidad de Panes por Bandeja:</span>
                                        <input type="number" id="cantidad_pan" class="form-control  " placeholder="Cantidad del producto" required >
                                    </div>
                                </div>
                                <div class=" row no-guters">
                                <div class="col-md-2 col-2 "></div>
                                <div class=" col-md-10 col-5 mb-2">
                                <button type="button" data-dismiss="modal" id="guardar_prd" class="mx-4 col-md-10 btn btn-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------FIN Modal agregar produccion--------------------------------------------------------->
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
        $('#tabla_producion').load('componentes/tabla_producion.php');
    });

    $(document).ready(function(){
        $('#guardar_prd').click(function(){
          bandejas=$('#numero_bandejas').val();
          panes=$('#cantidad_pan').val();
          guardarproduccion(bandejas, panes, '<?php echo $_SESSION["nombre_usuario"]?>');
        });
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

    <script type="text/javascript">
        $(document).ready(function(){
            $('#modificar_produccion').click(function(){
                 observacion=$('#observacion').val();
                 alert(observacion);
                 guardarsolicitud(observacion);
            });
        });
    </script>
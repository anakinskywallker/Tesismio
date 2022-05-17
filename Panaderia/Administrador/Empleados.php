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
    <script src="../librerias/jquery-3.2.1.min.js"></script>
     
  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
     
      <script src="js/funciones.js"></script>
      <script src="../librerias/bootstrap/js/bootstrap.js"></script>
      <script src="../librerias/alertifyjs/alertify.js"></script> 
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
            <<d></d>iv class="collapse navbar-collapse " id="navbarResponsive">

                <!--inicio notificaciones-->
                <ul class="navbar-nav text-uppercase ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="AdminP.php">Reportes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Productos.php">productos</a>
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
                
                <h3 class="section-heading text-uppercase ">Empleados</h3>
            </div>

            <!---->

            <form class="was-validated">
                <!--Botones Inicio -->
                <div class="row mb-2">

                    <div class="c mx-1"></div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <input type="search" class="form-control  " placeholder="Buscar">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-xs-2 col-md-3">
                        <a class="btn btn-secondary col" href="#empleados" role="button" data-toggle="modal">
                            <i class="fas fa-user-plus"></i> Agregar Empleado</a>
                    </div>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbarProd ">
                    <!---------------------------------------------tabla facturas--------------------------------------------->

                    <div id="tabla_empleados"></div>

                </div>
                    <!---------------------------------------------tabla facturas--------------------------------------------->
            </form>

            
            <div class="row mb-2">
                <div class="col-md-5"></div>
            </div>
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


    


    <!---------------------------------------------------Modal agregar empleados--------------------------------------------------------->
    <div class="modal fade" id="empleados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase ">Nuevo empleado</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class=" container-Agregar">
                        <!---->
                        <div class="col-12 col-md-12 mx-4 text-center">

                        </div>
                        <form class="was-validated">
                            <!--Botones Inicio -->
                            <div class=" row no-guters ">
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="nombreusuario" class="form-control  " placeholder="Nombre de usuario" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="pasword" class="form-control  " placeholder="Pasword" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="nombre" class="form-control  " placeholder="Nombres" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mx-5 mb-2">

                                    <div class="input-group col-md-9">
                                        <input type="text"  id="apellido" class="form-control  " placeholder="Apellidos" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="cedula" class="form-control  " placeholder="CC" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="celular" class="form-control  " placeholder="Telefono" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="salario" class="form-control  " placeholder="Salario" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=" row no-guters">
                                <div class="col-md-2"></div>
                                <div class=" col-md-10 mb-2">
                               
                                    <button id="btnGroupDrop1" type="button"
                                        class="mx-4 col-md-6 btn btn-secondary dropdown-toggle " data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" requerid>
                                        Tipo Empleado
                                    </button>
                                    
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <button type="button"  data-dismiss="modal" id = "cajero" class="btn btn-secndary">Cajero(a)        </button>
                                        <div></div>
                                        <button type="button"  data-dismiss="modal" id = "panadero" class="btn btn-secndary">Panadero(a)     </button>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3"></div>
                                

                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!---------------------------------------------------FIN Modal agregar empleados--------------------------------------------------------->

    <!---------------------------------------------------Modal Editar empleados--------------------------------------------------------->
    <div class="modal fade" id="mempleados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase ">Editar empleado</h3>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class=" container-Agregar">
                        <!---->
                        <div class="col-12 col-md-12 mx-4 text-center">

                        </div>
                        <form class="was-validated">
                            <!--Botones Inicio -->
                            <div class=" row no-guters ">
                               <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="numero" class="form-control  " placeholder="Numero Id" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="mnombreusuario" class="form-control  " placeholder="Nombre de usuario" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="mpasword" class="form-control  " placeholder="Pasword" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="mnombre" class="form-control  " placeholder="Nombres" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mx-5 mb-2">

                                    <div class="input-group col-md-9">
                                        <input type="text"  id="mapellido" class="form-control  " placeholder="Apellidos" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="mcedula" class="form-control  " placeholder="CC" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="mcelular" class="form-control  " placeholder="Telefono" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="msalario" class="form-control  " placeholder="Salario" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=" row no-guters">
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-3"></div>
                                <div class="col-md-9 mb-2">
                                    <button type="button" class="col-md-6 btn btn-success" data-dismiss="modal" id="actualizar">
                                    Actualizar
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!---------------------------------------------------FIN Modal editar agregar empleados-------------------------------------------------->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--para la grafica-->
    <script src="../vendor2/chart.js/Chart.js"></script>
    <script src="../vendor2/otro/demo/chart-area-demo.js"></script>
    <script src="../vendor2/otro/demo/chart-pie-demo.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla_empleados').load('componentes/tabla_empleados.php');
       
 	});
    $('#actualizar').click(function(){
        actualizaDatos();
        });
    $('#cajero').click(function(){
        preguntarSiNo2(2)  
        });
    $('#panadero').click(function(){
        preguntarSiNo2(3) 
           
        });
</script>
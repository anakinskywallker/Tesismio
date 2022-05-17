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
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

    <script src="../librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script> 
    
    
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
                    <li class="nav-item dropdown no-arrow mx-0">
                        
                        



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




    <!--------------------------------------------------Inicio Seccion Producion ---------------------------------------------------------->
    <section class="bg-light" id="portfolio1">
        <div class=" container">
            <!---->
            <div class="col-12 col-lg-12 text-center">
                <h3 class="section-heading text-uppercase ">Productos Fabricados </h3>
            </div>

            <!---->

            <form class="was-validated">
                <!--Botones Inicio -->
                <div class="row mb-2">
            <div class="col col-md-6 mb-2 row">
                <div class="col col-md-3  mb-2">


                    <button id="btnGroupDrop3" type="button" class="col-lg-18 btn btn-secondary dropdown-toggle "
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                      Opciones
                    </button>
                    <div class="dropdown-menu col col-md-6" aria-labelledby="btnGrouDrop2">
                                   <button type="button" id = "todos" class="btn btn-secndary">Todos       </button>
                                 <button type="button" id = "solopan" class="btn btn-secndary">Solo Pan    </button>
                               <button type="button" id = "pangrande" class="btn btn-secndary">Pan Grande  </button>
                                   <button type="button" id = "queso" class="btn btn-secndary">Pro Queso   </button>
                         <button type="button" id = "dulceria" gastos class="btn btn-secndary">Dulceria    </button>
                      <button type="button" id = "cafeteria" ingresos class="btn btn-secndary">Cafeteria   </button>
                       <button type="button" id = "desayuno" ingresos class="btn btn-secndary">Desayuno    </button>
                    </div>

              </div>

            </div>
                <div class="c mx-2"> </div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <input type="search" id="nombrepro1" class="form-control  " placeholder="Nombre Producto">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-md-2">
                        <a class="btn btn-secondary  col" href="formulario.php" role="button">
                                <i class="fas fa-cart-plus"></i> Agregar</a>
                    </div>

                </div>
 <!------------------------------------------------------------------Tabla Productos----------------------------------------------------->
                <div class="table-wrapper-scroll-y my-custom-scrollbarProd ">
    
                    <div id="tablaproductos"> </div>
<!-----------------------------------------------------------------FIn Tabla Productos----------------------------------------------------->
                </div>

            </form>
            <form class="was-validated">
                <div class="row mb-2">
                    <div class="col-md-5"></div>


                </div>

            </form>
        </div>
        <br>
        <div class="col-md-12 container">
            <div class="row ">

                <!-- Area Chart -->
                <div class="col-md-1"></div>
                <div class="col-md-7 col-xs-2">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Analisis por mes</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myAreaChart" width="100%" height="30"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Vendidos
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> No Vendidos
                                </span>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Pie Chart -->
                <div class="col-md-3 ">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Analisis por mes</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-danger"></i> no vendidos
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> vendidos
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <!------------------------------------------------FIN Inicio Seccion Producion ---------------------------------------------------------->
    
    <!-----------------------------------------------Inicio Seccion Reventa ----------------------------------------------------------------->
    <section class="bg-light" id="portfolio1">
        <div class=" container">
            <!---->
            <div class="col-12 col-lg-12 text-center">
                <h3 class="section-heading text-uppercase ">Productos Reventa </h3>
            </div>

            <!---->

            <form class="was-validated">
                <!--Botones Inicio -->
                <div class="row mb-2">
            <div class="col col-md-6 mb-2 row">
                <div class="col col-md-3  mb-2">


                    <button id="btnGroupDrop3" type="button" class="col-lg-18 btn btn-secondary dropdown-toggle "
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
                      Opciones
                    </button>
                    <div class="dropdown-menu col col-md-6" aria-labelledby="btnGrouDrop2">
                      <button type="button" id = "todos1" class="btn btn-secndary">Todos        </button>
                      <button type="button" id = "pangrnde1" class="btn btn-secndary">Pan Grande    </button>
                      <button type="button" id = "pendientes1" class="btn btn-secndary">Queso   </button>
                      <button type="button" id = "solo_gastos1" gastos class="btn btn-secndary">Dulceria </button>
                      <button type="button" id = "solo_ingresos1" ingresos class="btn btn-secndary">Cafeteria </button>
                      <button type="button" id = "solo_ingresos1" ingresos class="btn btn-secndary">Desayuno </button>
                    </div>

              </div>

            </div>
                <div class="c mx-2"> </div>
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
                    <div class="col-xs-2 col-md-2">
                        <a class="btn btn-secondary  col" href="formulario.php" role="button">
                                <i class="fas fa-cart-plus"></i> Agregar</a>
                    </div>

                </div>
  <!------------------------------------------------------------------Tabla Productos----------------------------------------------------->
                <div class="table-wrapper-scroll-y my-custom-scrollbarProd ">
    
                    <div id="tablaproductos2"> </div>
  <!----------------------------------------------------------------FIn Tabla Productos----------------------------------------------------->
                </div>

            </form>
            <form class="was-validated">
                <div class="row mb-2">
                    <div class="col-md-5"></div>


                </div>

            </form>
        </div>
        <br>
        <div class="col-md-12 container">
            <div class="row ">

                <!-- Area Chart -->
                
                


                <!-- Pie Chart -->
                
            </div>

        </div>


    </section>

    <!-----------------------------------------------FIN Inicio Seccion Reventa-------------------------------------------------------------->
    <!---------------------------------------------------Modal Editar empleados--------------------------------------------------------->
    <div class="modal fade" id="eproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                        <input type="text" id="nombrep" class="form-control  " placeholder="Nombre Producto" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="tipo" class="form-control  " placeholder="Pasword" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 my-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="text" id="clase" class="form-control  " placeholder="Nombres" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="costo" class="form-control  " placeholder="CC" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="precio" class="form-control  " placeholder="Telefono" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mx-5">

                                    <div class="input-group col-md-9">
                                        <input type="number" id="catidad" class="form-control  " placeholder="Salario" required>
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

    <!------------------------------------------------------------- Footer ------------------------------------------------------------------>
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
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaproductos').load('componentes/tabla_productos.php');
        $('#tablaproductos2').load('componentes/tabla_reventas.php');
       
 	});
    
</script>
<script type="text/javascript">
	$(document).ready(function(){
          
        $('#actualizar').click(function(){
        actualizaDatos2();
        });
        $('#todos').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,2) 
        });
        $('#solopan').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,3) 
        });
        $('#pangrande').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,4)
        });
        $('#queso').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,5)
        });
        $('#dulceria').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,6)   
        });
        $('#cafeteria').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,7) 
        });
        $('#desayuno').click(function(){
        id=$('#nombrepro1').val();
        listarpruductos(id,8)  
        });
                
 	});
</script>
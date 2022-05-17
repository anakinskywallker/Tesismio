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

    <title>Administrador </title>

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
      $("#fecha_in").datepicker();
      $("#fecha_fn").datepicker();
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
                        <a class="nav-link js-scroll-trigger" href="Empleados.php">Empleados</a>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-0">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!--aqui van el numero de notificaciones-->
                            <span class="badge badge-danger"> reportes</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right row " aria-labelledby="alertsDropdown">

                         <?php
                            date_default_timezone_set('America/Bogota'); 
                            $fein = date ("Y-m-d");  
                            $fefn = date ("Y-m-d H:i:s");
                            $sqlr="SELECT facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.FAC_VALOR FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE FAC_ESTADO = 2  ";
                            $result5=mysqli_query($conexion,$sqlr);
                            while($ver5=mysqli_fetch_row($result5)){    
                         ?>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    
                                </div>
                                <div>
                                    <div class="small text-gray-500"> <?php echo $ver5[0]; ?></div>
                                <?php echo "Alerta de Factura =";
                                      echo $ver5[1]; ?>   
                                </div>
                            </a>
                           <?php
                            }
                           ?>
                            
                           

                        </div>


                    </li>

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline "><?php echo $_SESSION["nombre_usuario"]?></span>
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

    <!------------------------------------------------------------PIRMERA PARTE------------------------------------------------------------->
    <section id="content-wrapper">
        <div class=" container">
           <div id="reporteDiario"></div>
	   </div>
	   
    </section>
   
    
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <!------------------------------------------------------------SEGUNDA PARTE------------------------------------------------------------->
    
   <section class="bg-light" id="portfolio">
    <div class="container ">
      <form class="was-validated">
        <div class="col-12 col-lg-12 text-center">
          <h3 class="section-heading text-uppercase "> BALANCE GENERAL FACTURAS </h3>

        </div>
        <div class="row mb-2">

          <div class="col-md-4 mb-2">

            <div class="input-group">

              <input type="search" id = "buscar_fac" class="form-control  " placeholder="No Factura">
              
              <button class="btn  btn-outline-success my-0  mx-1 my-sm-0" id ="buscar" type="submit"> <i class="fas fa-search"></i>Buscar</button>

            </div>

          </div>
          <div class="col col-md-3  mb-2">


            <button id="btnGroupDrop2" type="button" class="col-lg-12 btn btn-secondary dropdown-toggle "
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" requerid>
              Opciones
            </button>
            <div class="dropdown-menu col col-md-6" aria-labelledby="btnGrouDrop2">
              <button type="button" id = "todas" class="btn btn-secndary">Todos        </button>
              <button type="button" id = "anuladas" class="btn btn-secndary">Anuladas     </button>
              <button type="button" id = "pendientes" class="btn btn-secndary">Pendientes   </button>
              <button type="button" id = "solo_gastos" gastos class="btn btn-secndary">Solo Gastos  </button>
              <button type="button" id = "solo_ingresos" ingresos class="btn btn-secndary">Solo Ingresos</button>
            </div>

          </div>
          <div class="col-md-2">
            <input class="form-control " type="text" id="fecha_in" name="card_expiry" maxlength="7"
              placeholder="YYYY-MM-DD" required value="fecha inicial">

            <!--<input type="search" class="form-control is-invalid mb-2 " placeholder="YYYY-MM-DD" >-->

          </div>
          <div class="col-md-2">
            <input class="form-control" type="text" id="fecha_fn" name="card_expiry" maxlength="7"
              placeholder="YYYY-MM-DD" value="fecha final">
          </div>

        </div>
        <!---->


 <!------------------------------------------------ Tabla De Facturas  --------------------------------------------------------->
        <div id="Balance" class="table-wrapper-scroll-y my-custom-scrollbar1 ">
             <div class="container">
  	             <div id="tabla_factu"></div>
             </div>
        </div>
 <!------------------------------------------------ FIN Tabla De Facturas  --------------------------------------------------------->
   
      </form>
   
<H1></H1>
    </div>
  </section>


    <!-- Footer -->
    <footer>
            <div class="container" id="contact">
                <div class="row">
                    <div class="col-md-6">
                        <span class="copyright">Copyright &copy; Rico pan 2020</span>
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
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
          
        $('#elimina').click(function(){
        id_el=$('#validationTextarea11').val();
        observacion=$('#validationTextarea22').val();
        cambiarFactura2(id_el,observacion) 
        });
           
        $('#buscar').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(id,fecha_in,fecha_fn,1) 
        });
        $('#todas').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,2) 
              
        });
        $('#anuladas').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,3)
              
        });
        $('#pendientes').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,4)   
        });
        $('#solo_gastos').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,5)  
        });
        $('#solo_ingresos').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,6)  
        });
        $('#tabla_factu').load('componentes/tabla_factu2.php'); 
        $('#tabla_pro').load('componentes/tabla_pro.php');  
        $('#reporteDiario').load('componentes/reporteDiario.php'); 
        
 	});
</script>
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

  <title>Caja Facturas</title>

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

  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

  <script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.js"></script>
  <script src="../librerias/alertifyjs/alertify.js"></script>  






  <!-- calendario -->
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
      <a class="navbar-brand js-scroll-trigger" href="../index.html">Rico Pan</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="caja.php">Caja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Tortas.php">Tortas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="facturas.php">Facturacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Insumos.php">Insumos</a>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline "><?php echo $_SESSION["nombre_usuario"]?></span>
              <img class="img-profile rounded-circle" src="../img/team/2 - copia.jpg">

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="../index.html"  >Cerrar
                Sesión</a>
              <!-- aqui hay que enviar una señal para cerrar la sesion-->
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!----------------------------------------listado de facturacion  ----------------------------------------------------------------------------->
  <section class="bg-light" id="portfolio">
    <div class="container ">
      <form class="was-validated">
        <div class="col-12 col-lg-12 text-center">
          <h3 class="section-heading text-uppercase ">Facturación</h3>

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
        <div class="table-wrapper-scroll-y my-custom-scrollbar1 ">
             <div class="container">
  	             <div id="tabla_factu"></div>
             </div>
        </div>
 <!------------------------------------------------ FIN Tabla De Facturas  --------------------------------------------------------->
  <!----------------------------------------------- tabla INFORMACION DE LA FACTURA ----------------------------------------------->
        <div lass="table-wrapper-scroll-y my-custom-scrollbar ">
          <div class="container">
  	             <div id="tabla_pro"></div>
         </div>
        </div>
   <!----------------------------------------------- FIN tabla INFORMACION DE LA FACTURA -----------------------------------------------> 
      </form>
   <!----------------------------------------------- Inicio Boton Eliminar -------------------------------------------------------------> 
    <form class="was-validated">

        <div class="row mb-2">
          <div class="col-md-3">
            <input type="text" class="form-control is-invalid mb-2" placeholder="Id Factura" aria-label="Cantidad"
              aria-describedby="btnGroupn" id="validationTextarea1" required>
          </div>

          <div class="col-xs-2 col-md-7 ">
            <input type="text" class="form-control is-invalid mb-2" placeholder="Observacion" aria-label="Cantidad"
              aria-describedby="btnGroupAn" id="validationTextarea2" required>

          </div>
          <div class="col-xs-2 col-md-2">
            <button id="elimina" type="submit" class="btn btn-secondary mb-2 col">Eliminar</button>
          </div>

        </div>

      </form>
   <!----------------------------------------------- FIN Boton eliminar ----------------------------------------------------------->

    </div>
  </section>




<!------------------------------------------ Footer -------------------------------------->
<footer>
    <div class="container" id="contact">
        <div class="row">
            <div class="col-md-6">
                <span class="copyright">Copyright &copy; Rico Pan 2020</span>
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
  <!-- Bootstrap core JavaScript -->

  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/agency.min.js"></script>

</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
         
        $('#elimina').click(function(){
        id_el=$('#validationTextarea1').val();
        observacion=$('#validationTextarea2').val();
        cambiarFactura(id_el,observacion) 
        });
           
        $('#buscar').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(id,fecha_in,fecha_fn,1,2) 
        });
        $('#todas').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,2,2) 
              
        });
        $('#anuladas').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,3,2)
              
        });
        $('#pendientes').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,4,2)   
        });
        $('#solo_gastos').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,5,2)  
        });
        $('#solo_ingresos').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,6,2)  
        });
        $('#tabla_factu').load('componentes/tabla_factu.php'); 
        $('#tabla_pro').load('componentes/tabla_pro.php'); 
        
        
 	});
</script>




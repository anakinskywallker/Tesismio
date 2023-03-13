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

  <title>Encargos Tortas</title>

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
          </li><li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="encargos.php">Encargos Tortas</a>
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
          <h3 class="section-heading text-uppercase ">Encargos</h3>

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
              <button type="button" id = "porFecha" class="btn btn-secndary">Por_Fecha        </button>
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
 <!------------------------------------------------ Tabla De Facturas  --------------------------------------------------------->
        <div class="table-wrapper-scroll-y my-custom-scrollbar1 ">
             <div class="container">
  	             <div id="tabla_encargos"></div>
             </div>
        </div>
 <!------------------------------------------------ FIN Tabla De Facturas  --------------------------------------------------------->
      </form>
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
         
        $('#Pagar').click(function(){
        id_el=$('#validationTextarea1').val();
        observacion=$('#validationTextarea2').val();
        cambiarFactura(id_el,observacion) 
        });
           
        $('#buscar').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(id,fecha_in,fecha_fn,1,3) 
        });
        $('#todas').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,2,3) 
        });

        $('#porFecha').click(function(){
        id=$('#buscar_fac').val();
        fecha_in=$('#fecha_in').val();
        fecha_fn=$('#fecha_fn').val();
        listarFacturas(10,fecha_in,fecha_fn,3,3)       
        });

        
        $('#tabla_encargos').load('componentes/tabla_encargos.php'); 
              
 	});
</script>
<div class="modal fade" id="pagar_encargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                        Pagar
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



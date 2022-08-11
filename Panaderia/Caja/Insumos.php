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

  <title>INSUMOS</title>

  <!-- menu CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
  <link href="../css/estilos.css" rel="stylesheet">
  <link href="../css/caja/index2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

  <script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.js"></script>
  <script src="../librerias/alertifyjs/alertify.js"></script> 
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

  <br>
  <br>
  <br>
  <!---------------------------------- -->

  <section class="main row">
    <!--  tabla facturacion  -->
    <div id="tabla2"></div>
    <article class="col- col-xs-12 col-sm-12 col-md-5 ">
                    <div class="container">
  		                <div id="tablain"></div>
	               </div>
      
    </article>


    <!--  tabla productos 1 -->

    <article class="col col-sm-12 col-md-7">
      <!-- botones tipo de isumo-->
      
<!-----------------------------------------------------------Tabla de Productos revendidos -------------------------------------------------->
        <div class="contaier col-sm-12">

          <div class="table-wrapper-scroll-y my-custom-scrollbar3">

            <table class="table2" id="portfolio">
                                <tbody>
                                  <?php

                                      $mysqli = new mysqli($host, $user, $pw, $db);
                                      $sql ="SELECT * FROM productos WHERE (PRO_TIPO = 1 OR PRO_TIPO = 2 OR PRO_TIPO = 3 OR PRO_TIPO = 4 OR PRO_TIPO = 5 OR PRO_TIPO = 6 OR PRO_TIPO = 7 OR PRO_TIPO = 8) AND (PRO_CLASE = 2)";
                                      $result1 = $mysqli->query($sql);
                                      $row_cnt = $result1->num_rows;
                                    if (mysqli_num_rows($result1) > 0){
                                        while($row = mysqli_fetch_assoc($result1)){
                                            $id[] = $row['PRO_ID'];
                                            $foto[] = $row['PRO_FOTO'];
                                            $nombre[] = $row['PRO_NOMBRE'];
                                            $precio[] = $row['PRO_VENTA'];
                                                 }
                                                }
                                            
                                    for ($i = 0; $i <= $row_cnt ; $i++) {
                                      
                                    if ( $i < $row_cnt - 4) {
                                        $datos=$id[$i]."||".
                                                $foto[$i]."||".
                                                $nombre[$i]."||".
                                                $precio[$i];
                                        $datos1=$id[$i+1]."||". 
                                                $foto[$i+1]."||".
                                                $nombre[$i+1]."||".
                                                $precio[$i+1];
                                                                            
                                        
                                        $datos2=$id[$i+2]."||".
                                                $foto[$i+2]."||".
                                                $nombre[$i+2]."||".
                                                $precio[$i+2]; 
                                        $datos3=$id[$i+3]."||".
                                                $foto[$i+3]."||".
                                                $nombre[$i+3]."||".
                                                $precio[$i+3];
                                        $datos4=$id[$i+4]."||".
                                                $foto[$i+4]."||".
                                                $nombre[$i+4]."||".
                                                $precio[$i+4];
                                        }
                                  ?>
                                   <tr>    
                                    <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div>
                                  </td>
                                    <td><div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos1; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+1];?>" alt="">
                                          </a>
                                         
                                        </div>
                                        </div></td>
                                    <td><div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos2; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+2];?>" alt="">
                                          </a>
                                         
                                        </div>
                                        </div></td>
                                      
                                    <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos3; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+3];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div></td>
                                      <td>
                                        <div class="row">
                                        <div class="col-md-12 portfolio-item">
                                          <a class="portfolio-link" data-toggle="modal" href="#myModal" onclick="sacarid('<?php echo $datos4; ?>')">
                                            <div class="portfolio-hover">
                                              <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                              </div>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $foto[$i+4];?>" alt="">
                                          </a>
                                          
                                        </div>
                                        </div>
                                        </td>
                                      
                                  </tr>
                                  <?php
                                           $i = $i + 4;
                                     }
                                    echo '<tr></div>
                                        </div></tr>';
                                  ?>
                                                                  
                                    
                                   <tr></tr>
                                </tbody>
                              </table>
          </div>
        </div>
    <!-----------------------------------------------------------------------------------tabla------------------------->
      </div>
    </article>
    <div class="col-xs-12 col-sm-12 col-md-7">
    </div>
  </section>
  <!---------------------------------- -->
  <!-- Modal -->
  

  <!-- fin modal-->

  <!-- modal generar factura-->

  


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--dfdsgdfgdfgdfgdf -->

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/agency.min.js"></script>

  <script src="../js/jquery.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>

<!---------------------------------------- Modal para agregar cantidad de productos --------------------------->
       
 
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

              <!----------------- Modal content------------------>
              <div class="modal-content col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header ">
                    <h4 id="nombrepro" class="modal-title "></h4>
                  <button type="button" class="close" arial-label="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                

                 <p class="text-muted">Ingresa la Cantidad </p>
                    
                    <div class="col-xs-12  col-md-12">

                    <div class=" ">

                        <div class="col-md-12">
                        <div class="panel panel-primary">
                                 <div class="input-group">
                                 <span class="input-group-addon" id="opr"></span>
                                 <input type="text" class="form-control" id="cantidad" aria-describedby="basic-addon3">
                                 </div>
                                 
                                 
                             
                         </div>
                        </div>
                        <div class="col-md-12">
                        </div>
                     </div>
                     
                    </div>
                    <p class="text-muted">Ingresa el precio por Unidad </p>
                    
                    <div class="col-xs-12  col-md-12">

                    <div class=" ">

                        <div class="col-md-12">
                        <div class="panel panel-primary">
                                 <div class="input-group">
                                 <span class="input-group-addon" id="opr"></span>
                                 <input type="text" class="form-control" id="preciou" aria-describedby="basic-addon3">
                                 </div>
                                 
                                 
                             
                         </div>
                        </div>
                        <div class="col-md-12">
                        </div>
                     </div>
                     
                    </div>


                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-xs-1 col-sm-6 col-md-11">

                            <button type="button" class="col-md-5 btn btn-danger " data-dismiss="modal">
                            Cerrar
                            </button>
                            <button type="button" class="col-md-6 btn btn-success" data-dismiss="modal" id="guardar_pro">
                            Guardar
                            </button>
                        </div>
                    </div>

                </div>

              </div>

            </div>
          </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablain').load('componentes/tabla_in.php');
 	});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#guardar_pro').click(function(){
          cantidad=$('#cantidad').val();
          preciou=$('#preciou').val();
          agregarafactura2(cantidad,preciou);
        });
    });
</script>
<!--------------------------------++--------------- fin modal-------------------------------------------------->
<!-- Portfolio Modals 

  <!-- Modal 1 
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here 
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
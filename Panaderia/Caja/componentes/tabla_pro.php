
 <?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

    ?>

           <table class="table table-striped">
            <thead>
              <div class="col-lg-12 text-center">
                <h6 class="section-heading text-uppercase">informacion de la factura</h6>
              </div>
              <tr class="bg-secondary">
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">V/Unidad</th>
                <th scope="col">Total</th>


              </tr>
            </thead>
            <tbody>
             <?php 
$dato = 0;
$total = 0;
				                    $sql="SELECT *  from aux3";
				                    $result=mysqli_query($conexion,$sql);
                                    while($ver=mysqli_fetch_row($result)){ 
                                      $id_factura = $ver[0];  
                                      $saldo = $ver[5];
                                      $aux = $ver[4] / $ver[2];
                                      $total = $total + $ver[4];
             ?>
              <tr>
                <th scope="row"> <?php echo $ver[1]  ?></th>
                <td><?php echo $ver[2]  ?></td>
                <td><?php echo $aux  ?></td>
                <td><?php echo $ver[4]  ?></td>
              </tr>
              
               <?php }
                                        ?>

              <tr>
                <th scope="row"> <?php echo $ver[1]  ?></th>
                <td><?php echo $ver[2]  ?></td>
                <td><?php echo $ver[5]  ?></td>
                <td><?php echo $ver[4]  ?></td>
              </tr>
            </tbody>
          </table>
     <div class="col-md-12">
          <a>Factura No: <?php echo $id_factura  ?></a>
    </div>
    
    <form class="was-validated">

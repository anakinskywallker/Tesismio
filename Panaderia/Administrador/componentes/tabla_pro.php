
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
                <th scope="col">Costo</th>
                <th scope="col">Total</th>


              </tr>
            </thead>
            <tbody>
             <?php 

				                    $sql="SELECT *  from aux3";
				                    $result=mysqli_query($conexion,$sql);
                                    while($ver=mysqli_fetch_row($result)){ 
                                     $dato = $ver[0];  
                                     $aux = $ver[4] / $ver[2];
             ?>
              <tr>
                <th scope="row"> <?php echo $ver[1]  ?></th>
                <td><?php echo $ver[2]  ?></td>
                <td><?php echo $aux  ?></td>
                <td><?php echo $ver[4]  ?></td>
              </tr>
              
               <?php }
                                        ?>
            </tbody>
          </table>
     <div class="col-md-12">
          <a>Factura No: <?php echo $dato  ?></a>
    </div>
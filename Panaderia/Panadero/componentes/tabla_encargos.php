 <?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 <table class="table table-striped" style="cursor: pointer;">
            <thead>
              <tr class="bg-secondary">
               <th scope="col">Seleccionar</th>         
                <th scope="col">No Factura</th>
                <th scope="col">Fecha F</th>
                <th scope="col">Nombres U</th>
                <th scope="col">F. Entrega</th>
                <th scope="col">Telefono</th>
                <th scope="col">Total</th>
                <th scope="col">Saldo</th>
                

              </tr>
            </thead>
            <tbody>
            <?php
                    
                    $sql2="SELECT * from aux2 WHERE id='3'";
                    $result2=mysqli_query($conexion,$sql2);
                    $ver2=mysqli_fetch_row($result2);
                    date_default_timezone_set('America/Bogota');
                    $fein = date ("Y-m-d");
                    $fefn = date ("Y-m-d H:i:s");
                    $aux=$ver2[4]; 
                    $id_fa=$ver2[1];
                    $fein = $ver2[2];
                    $fefn = $ver2[3];
                    if ($aux == 1) {    
                        
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE FACTURAS_ID = $id_fa";
                        } elseif($aux == 2) {
                        $sql="SELECT F.FACTURAS_ID,F.FAC_FECHA,E.NOMBREU,E.FECHA_ENTREGA,E.TELEFONO,F.FAC_VALOR,F.FAC_SALDO FROM facturas F INNER JOIN encargostortas E ON E.ID_FACTURA = F.FACTURAS_ID WHERE FAC_ESTADO = '3' ORDER BY FAC_FECHA DESC";
                      }elseif($aux == 3){
                        $sql="SELECT F.FACTURAS_ID,F.FAC_FECHA,E.NOMBREU,E.FECHA_ENTREGA,E.TELEFONO,F.FAC_VALOR,F.FAC_SALDO FROM facturas F INNER JOIN encargostortas E ON E.ID_FACTURA = F.FACTURAS_ID WHERE FAC_ESTADO = '3' AND (FAC_FECHA BETWEEN '$fein' AND '$fefn') ORDER BY FAC_FECHA DESC";
                      }elseif($aux == 4){
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_ESTADO = 0 ) ORDER BY facturas.FACTURAS_ID";
                      }elseif($aux == 5){
                      $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_ESTADO = 2 ) ORDER BY facturas.FACTURAS_ID";
                      }
                    
				    $result=mysqli_query($conexion,$sql);
                    while($ver=mysqli_fetch_row($result)){ 
					       
             ?>
                                   
              <tr>
                <td>  <button onclick="mostrarFactura('<?php echo $ver[0]?>')"type="button" class="btn btn-secondary btn-sm">Mirar</button></td>
                <td>  <?php echo $ver[0] ?>  </td>
                <td>  <?php echo $ver[1] ?>  </td>
                <td><a href=""><?php echo $ver[2] ?> </a> </td>
                <td><a href=""><?php echo $ver[3] ?> </a> </td>
                <td><a href=""><?php echo $ver[4] ?> </a> </td>
                <td><a href=""><?php echo $ver[5] ?> </a> </td>
                <td><a href=""><?php echo $ver[6] ?> </a> </td>
              </tr>
              <?php 
                    }              
                ?>
             </tbody>
          </table>
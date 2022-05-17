 <?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 <div class="container  my-custom-scrollbarList">   
 <table class="table table-striped-scrol" style="cursor: pointer;">
            <thead>
              <tr class="bg-secondary">
               <th scope="col">Seleccionar</th>         
                <th scope="col">No Factura</th>
                <th scope="col">Fecha</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Observacion</th>
                <th scope="col">Estado</th>
                <th scope="col">Tipo</th>
                <th scope="col">Total</th>

              </tr>
            </thead>
            <tbody>
            <?php
                    
                    $sql2="SELECT * from aux2 WHERE id='1'";
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
                        
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE FACTURAS_ID = $id_fa";
                    }elseif($aux == 2) {
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE FAC_FECHA BETWEEN '$fein' AND '$fefn' ORDER BY facturas.FACTURAS_ID";
                        $bandera = 1; 
                    }elseif($aux == 3){
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_ESTADO = 0 ) ORDER BY facturas.FACTURAS_ID";
                    }elseif($aux == 4){
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_ESTADO = 2 ) ORDER BY facturas.FACTURAS_ID";
                    }elseif($aux == 5){
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_VALORTIPO = 0 ) ORDER BY facturas.FACTURAS_ID";
                    }else{
                        $sql="SELECT facturas.FACTURAS_ID,facturas.FAC_FECHA,personal.NOMBRE,personal.APELLIDOS,facturas.OBSERVACION,facturas.FAC_VALOR,facturas.FAC_VALORTIPO,facturas.FAC_ESTADO FROM facturas INNER JOIN personal ON personal.PERSONAL_ID = facturas.PERSONAL_ID WHERE (FAC_FECHA BETWEEN '$fein' AND '$fefn') AND (FAC_VALORTIPO = 1 ) ORDER BY facturas.FACTURAS_ID";
                    }
                    $ganancia = 0;
                    $deuda = 0;
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
                <td><a href=""><?php if($ver[7] == 1) {
                          echo "Normal";
                       }elseif($ver[7] == 0){
                          echo "Cancelado";
                        }else{
                          echo "Pendiente";
                        } 
                    ?>  </a> </td>
                <td><a href=""><?php 
                            if($ver[7] == 0) {  
                                
                                            if ($ver[6] == 1){ 
                                                echo "Ingreso"; 
                                                
                                            } 
                                            else {
                                                echo  "Egreso";
                                                
                                            }
                                    }
                                    else
                                    {
                                            if ($ver[6] == 1){ 
                                                echo "Ingreso"; 
                                                $ganancia =  $ganancia + $ver[5];
                                            } 
                                            else {
                                                echo  "Egreso";
                                                $deuda = $deuda + $ver[5];
                                            }   
                                    }
                       
                                    ?> 
                                
                    </a> 
                </td>
                <td><a href=""><?php echo $ver[5] ?> </a> </td>
                
    
              </tr>
             
              <?php 
                    } 
                $costo = 0 ;
                    $venta = 0 ;
                    $rentavilidad = 0;                
                    $sql2="SELECT ventas.VENTAS_ID,productos.PRO_COSTO,productos.PRO_VENTA,ventas.VEN_CANTIDAD,ventas.VEN_FECHA,ventas.VEN_TIPO FROM ventas INNER JOIN productos ON productos.PRO_ID = ventas.PRO_ID WHERE (VEN_FECHA BETWEEN '$fein' AND '$fefn') AND (VEN_ESTADO = 1) AND (VEN_TIPO = 1 )";
                                   
				   $result2=mysqli_query($conexion,$sql2); 
                   while($ver2=mysqli_fetch_row($result2)){
                    if ($ver2[5] == 1){
                        
                    $costo = $costo + $ver2[1]  * $ver2[3];
                    $venta = $venta + ($ver2[2] * $ver2[3]);
                       }
                       else {
                           
                      }
                                    
                    }
                    $rentavilidad = $venta - $costo;
                ?>
             </tbody>
          </table>
        </div>
         
   <!----------------------------------------------- tabla INFORMACION DE LA FACTURA ----------------------------------------------->
        <div lass="table-wrapper-scroll-y my-custom-scrollbar ">
          <div class="container">
  	             <div id="tabla_pro"></div>
         </div>
        </div>
   <!----------------------------------------------- FIN tabla INFORMACION DE LA FACTURA ----------------------------------------------->
   <!----------------------------------------------- Inicio Boton Eliminar -------------------------------------------------------------> 
    <form class="was-validated">

        <div class="row mb-2">
          <div class="col-md-3">
            <input type="text" class="form-control is-invalid mb-2" placeholder="Id Factura" aria-label="Cantidad"
              aria-describedby="btnGroupn" id="validationTextarea11" required>
          </div>

          <div class="col-xs-2 col-md-7 ">
            <input type="text" class="form-control is-invalid mb-2" placeholder="Observacion" aria-label="Cantidad"
              aria-describedby="btnGroupAn" id="validationTextarea22" required>

          </div>
          <div class="col-xs-2 col-md-2">
            <button id="elimina" type="submit" class="btn btn-secondary mb-2 col">Eliminar</button>
          </div>

        </div>

      </form>
   <!----------------------------------------------- FIN Boton eliminar ----------------------------------------------------------->
   <!----------------------------------------------- INFORMACION        ----------------------------------------------------------->
    <div class="row">
                <!-- card 1-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gastos
                                    </div>
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">$ <?php echo $deuda?> </div>
                                        
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card  2 <div class="h6 mb-0 font-weight-bold text-gray-800">Gastos Insumos: $ 300.000</div>-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary2 text-upperce mb-1 ">VENTAS
                                    </div>
                                    <div class="text-xs font-weight-bold text-primary2 text-uppercase mb-1"> $ 
                                        <?php echo $ganancia?>
                                    </div>
                                    
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL EFETIVO
                                    </div>
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">$ <?php echo $ganancia - $deuda?>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo "Utilidad = $ $rentavilidad"?></div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!----------------------------------------------- FIN INFORMACION ------------------------------------------------------------->
<script type="text/javascript">
    $(document).ready(function(){
        $('#elimina').click(function(){
        id_el=$('#validationTextarea11').val();
        observacion=$('#validationTextarea22').val();
        cambiarFactura2(id_el,observacion) 
        });
 	});
</script>
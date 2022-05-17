<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
                    <!--tabla facturas-->

                    <table class="table table-striped" style="cursor: pointer;">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Clase</th>
                                <th scope="col">Costo</th>
                                <th scope="col">Precio </th>
                                <th scope="col">Cantidad</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    
                    $sql2="SELECT * from aux2 WHERE id='10'";
                    $result2=mysqli_query($conexion,$sql2);
                    $ver2=mysqli_fetch_row($result2);
                    $aux=$ver2[4]; 
                    $nombre = $ver2[3];
                    if ($aux == 1) {
                        
                        $sql="SELECT PRO_NOMBRE,PRO_TIPO,PRO_CLASE,PRO_COSTO,PRO_VENTA,PRO_CANTIDAD,PRO_ID FROM productos WHERE (PRO_NOMBRE = $nombre) AND PRO_ESTADO = 1";
                    }else {
                        $sql="SELECT PRO_NOMBRE,PRO_TIPO,PRO_CLASE,PRO_COSTO,PRO_VENTA,PRO_CANTIDAD,PRO_ID FROM productos WHERE (PRO_CLASE = 2) AND PRO_ESTADO = 1";
                         
                    }
                            
	                       
                                                           
				            $result=mysqli_query($conexion,$sql);
                            while($ver=mysqli_fetch_row($result)){
                                
                                $datos=$ver[6]."||".
                                  $ver[0]."||".
                                  $ver[1]."||".
                                  $ver[2]."||".    
						          $ver[3]."||".
						          $ver[4]."||".
						          $ver[5];

                            ?>
                            <tr>
                                <td><?php echo $ver[0] ?></td>
                                <td><?php echo $ver[1]                  
                                
                                
                                
                                ?></td>
                                <td><?php if ($ver[2] == 1) {
                                        
                                        echo "Producion";
                                    }else {
                                        echo "Pro Reventa";                    
                                    } ?></td>
                                
                                <td><?php echo $ver[3] ?> </td>
                                <td><?php echo $ver[4] ?></td>
                                <td><?php echo $ver[5] ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#eproductos" onclick="agregaform2('<?php echo $datos ?>')" role="button">
                                        <i class="fas fa-edit fa-fw"></i>Editar
                                    </a>
                                </td>
                                <td>
                                    <a role="button" onclick="preguntarSiNoProductos('<?php echo $ver[6]?>')">
                                        <i class="fas fa-folder-minus fa-fw"></i>Suspender
                                    </a>
                                </td>

                            </tr>
                            <?php 
	                           }
                            ?>
                            
                        </tbody>
                    </table>

                
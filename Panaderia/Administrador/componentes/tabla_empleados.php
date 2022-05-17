 <?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
                
                 <table class="table table-striped" style="cursor: pointer;">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Salario</th>
                                <th>Opciones </th>
                                <th>Opciones </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                            $deuda = 0;
                            $ganancia = 0; 
                            $fefn = date ("Y-m-d H:i:s");
                            
                 
                            $sql=" SELECT NOMBRE,APELLIDOS,CELULAR,TIPO,SALARIO,PERSONAL_ID,CEDULA,LOGIN_NOMBRE,PASSWORD,PERSONAL_ID FROM personal WHERE ESTADO = 1";
                                   
				            $result=mysqli_query($conexion,$sql);
                            while($ver=mysqli_fetch_row($result)){ 
                                $datos=$ver[7]."||".
						          $ver[8]."||".
                                  $ver[0]."||".
                                  $ver[1]."||".    
						          $ver[6]."||".
						          $ver[2]."||".
                                  $ver[4]."||".
						          $ver[9];
					       
             ?>

                            <tr>
                                <th> <?php echo $ver[0] ?></th>
                                
                                <td><?php echo $ver[1] ?></td>
                                <td><?php echo $ver[2] ?></td>
                                <td><?php
                                       if ($ver[3] == 1){
                                            echo "Administrador";
                                        }else if ($ver[3] == 2 ){
                                            echo "Cajero";
                                       }else {
                                            echo "Panadero";
                                       }
                                ?>
                                </td>
                                <td><?php echo $ver[4] ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#mempleados" onclick="agregaform('<?php echo $datos ?>')" role="button">
                                        <i class="fas fa-edit fa-fw"></i>Editar
                                    </a>
                                </td>
                                <td>
                                    <a role="button" onclick="preguntarSiNo('<?php echo $ver[5]?>')">
                                        <i class="fas fa-folder-minus fa-fw"></i>Suspender
                                    </a>
                                </td>

                            </tr>
                            <?php
                            }
                                ?>
                            
                        </tbody>
                    </table>
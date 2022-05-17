
    <?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

    ?>
                           

                <div class="container">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar ">

                              <table class="table table-bordered table-striped mb-0">
                                <thead>
                                  <tr>
                                    <th>Eliminar</th>
                                    <th scope="col">No. Fac</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre del producto </th>
                                    <th scope="col">CANT</th>
                                    <th scope="col">VALOR U$ </th>
                                    <th scope="col">TOTAL</th>
                                    
                                  </tr>
                                </thead>
                                
                                <tbody>
                                  <?php 

				                    $sql="SELECT id_factura,pro_id,nombre,cantidad,valor_unidad,total 
						              from caja";
				                    $result=mysqli_query($conexion,$sql);
                                    $suma = 0;
                                    $datos[0] = 0; 
				                    while($ver=mysqli_fetch_row($result)){ 

					                  $datos=$ver[0];
                                            
                                    ?>

				                                               
                                  <tr>
                                    <td>
                                      <a  href="#"  role="button" onclick="eliminarPtabla('<?php echo $ver[1]?>')">
                                      <i class="mx-3 fas fa-trash-alt fa-fw" ></i>
                                    </a>                 </td>
                                    <td><?php echo $ver[0] ?></td>
                                    <td><?php echo $ver[1] ?></td>
                                    <td><?php echo $ver[2] ?></td>
                                    <td><?php echo $ver[3] ?></td>
                                    <td><?php echo $ver[4] ?></td>
                                    <td><?php echo $ver[5] ?></td>
                                      <?php 
                                        $suma = $suma + $ver[5]; 
                                      ?>
                                  </tr>
                                 <?php 
                                    } 
                                  ?>
                                                                    
                                </tbody>
                                
                              </table>
                                
                            </div>
                                 <table class="table table-bordered table-striped mb-0">
                                    <thead>
                                      <tr>
                                        <th scope="col">No fact: <?php echo $datos[0]; ?></th>
                                        

                                          <th scope="col">Total: <?php echo $suma; ?></th>
                                        
                                      </tr>
                                    </thead>
                                <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                          <tr>
                                              <div class="row">
                                                                                              
                                                
                                                <div class="col-lg-3">
                                                    <button class="btn btn-warning my-2 my-sm-0 col-lg-12" onclick="limpiar()" type="submit">Limpiar</button>
                                                  </div>
                                                  <div class=" col-lg-2">
                                                    <button class="btn btn-success my-2 my-sm-0 col-lg-12 " type="submit" data-toggle="modal" href="#tortas">Tortas</button>
                                                  </div>
                                                  <div class=" col-lg-2">
                                                    <button class="btn btn-success my-2 my-sm-0 col-lg-12 " type="submit" data-toggle="modal" 
                                                    href="#gastos">Gasto</button>
                                                    </div>
                                                
                                                  <div class=" col-lg-5">
                                                    <button class="btn btn-success my-2 my-sm-0 col-lg-12 " type="submit" data-toggle="modal" href="#generar">Generar factura</button>
                                                  </div>
                                                
                                        
                                              </div>
                                          </tr>
                                        </thead>
                                     </table>                        
                                </table>
                        </div>
                        
   <!------------------------------------------ otro modal de generar factura   ------------------------------------------>
  <div class="modal fade" id="generar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h2 class="text-success">TOTAL: <?php echo $suma; ?></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">

          <div class="">
            <div class="row">
              <div class="mx-5 col-md-6">
                <input type="text" class="form-control" id="pago" aria-describedby="basic-addon3">

              </div>


              <div class="mx-5 col-md-8 row">


               
                <div class="col-md-12">
                  <p class="text-muted">Ingresa la cantidad con la que cancelan </p>

                </div>
                <div class="col-md-12">

                  <button class="btn btn-success my-2 my-sm-0 col-lg-12 " id="generarF"data-dismiss="modal"  type="submit"
                    data-toggle="modal">Confirmar
                  </button>
                </div>
              </div>

            </div>
          </div>
          <br>
          <br><br><br><br><br>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------ fin otro modal de generar factura------------------------------------------->  
  
  <!-------------------------------------------Modal agregar tortas---------------------------------------------->
    <div class="modal fade" id="tortas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase text-success">Agregar Torta</h3>
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
                            <div class="no-guters ">
                                <div class="col-md-12 mb-2 my-2 mx-5">
                                    <div class="input-group col-md-9">
                                        <input type="text" class="form-control  " placeholder="Fecha de Entrega" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mx-5 mb-2">
                                    <div class="input-group col-md-9">
                                        <input type="text" class="form-control  " placeholder="Informacion Cliente" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 mx-5">
                                    <div class="input-group col-md-9">
                                        <input type="number" class="form-control  " placeholder="Cantidad U" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mx-5 mb-2">
                                    <div class="input-group col-md-9">
                                        <input type="text" class="form-control  " placeholder="Descripcion" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 mx-5">
                                    <div class="input-group col-md-9">
                                        <input type="number" class="form-control  " placeholder="Valor" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 mx-5">
                                    <div class="input-group col-md-9">
                                        <input type="number" class="form-control  " placeholder="Abono" required>
                                    </div>
                                </div>
                                <div class=" row no-guters">
                                <div class="col-md-2"></div>
                                <div class=" col-md-10 mb-2">
                               
                                    <button id="btnGroupDrop1" type="button"
                                        class="mx-4 col-md-6 btn btn-secondary dropdown-toggle " data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" requerid>
                                        Modo de Pago 
                                    </button>
                                    
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <button type="button"  data-dismiss="modal" id = "Cancela" class="btn btn-secndary">Cancela        </button>
                                        <div></div>
                                        <button type="button"  data-dismiss="modal" id = "Abona" class="btn btn-secndary">Abona     </button>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3"></div>
                                

                            </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-----------------------------------------FIn Modal agregar tortas---------------------------------------------->
 <!-------------------------------------------Modal agregar gasto---------------------------------------------->
    <div class="modal fade" id="gastos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase text-success">Agregar Gasto</h3>
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
                            <div class="no-guters ">
                                
                                <div class="col-md-12 mb-2 mx-5">
                                    <div class="input-group col-md-9">
                                        <input type="number" class="form-control  " placeholder="Valor del Gato" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mx-5 mb-2">
                                    <div class="input-group col-md-9">
                                        <input type="text" class="form-control  " placeholder="Descripcion" required>
                                    </div>
                                </div>
                                
                                
                                <div class=" row no-guters">
                                <div class="col-md-2"></div>
                                <div class=" col-md-10 mb-2">
                               
                                    <button id="btnGroupDrop1" type="button"
                                        class="mx-4 col-md-6 btn btn-secondary dropdown-toggle " data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" requerid>
                                        Modo de Pago 
                                    </button>
                                    
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <button type="button"  data-dismiss="modal" id = "Cancela" class="btn btn-secndary">Cancela        </button>
                                        <div></div>
                                        <button type="button"  data-dismiss="modal" id = "Abona" class="btn btn-secndary">Abona     </button>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3"></div>
                                

                            </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-----------------------------------------FIn Modal agregar gasto---------------------------------------------->

 <script type="text/javascript">
    $(document).ready(function(){
        $('#generarF').click(function(){
          pago=$('#pago').val();
          generarFactura(pago,'<?php echo $suma; ?>','<?php echo $_SESSION["nombre_usuario"]?>');
          //restarainventario(pago);
          sumarainventario(pago);
        });
    });
</script>
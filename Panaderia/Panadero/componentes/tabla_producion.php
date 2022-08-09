<?php
session_start();
require_once "../../Administrador/php/conexion.php";
$conexion = conexion();

?>
<script src="../js/funciones.js"></script>

<table class="table table-striped" style="cursor: pointer;">
    <thead>
        <tr class="bg-secondary">
            <th scope="col">Prod.</th>
            <th scope="col">Nom.</th>
            <th scope="col">Apll.</th>
            <th scope="col">Fech.</th>
            <th scope="col">Cant.</th>
            <th>Editar. </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $deuda = 0;
        $ganancia = 0;
        $fefn = date("Y-m-d H:i:s");


        $sql = " SELECT P.PRO_NOMBRE, L.NOMBRE,L.APELLIDOS, O.FECHA, O.CANTIDAD, O.PRODUCCION_ID FROM produccion O JOIN productos P ON O.PRO_ID = P.PRO_ID JOIN personal L ON O.PERSONAL_ID = L.PERSONAL_ID ORDER BY O.FECHA desc";
        $result = mysqli_query($conexion, $sql);
        while ($ver = mysqli_fetch_row($result)) {
            

        ?>

            <tr>
                <td><?php echo $ver[0] ?></td>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td>
                    <a data-toggle="modal" data-target="#Edicion" onclick="solicitudcancelar('<?php echo $ver[5]?>')" role="button">
                        <i class="fas fa-edit fa-fw"></i> 
                    </a>
                </td>
                
            </tr>
            
            
        <?php
        }
        ?>

    </tbody>
</table>
<div class="modal fade" id="Edicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">

                <div class="modal-header">
                    <h3 class="mx-5 section-heading text-uppercase ">Tostadas</h3>
                    <!--Obtener dato-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <div class="">
                        <form class="was-validated">
                            <!--Botones Inicio -->
                            <div class=" row no-guters ">
                                <div class="col-md-12 col-12 mb-2 my-2 mx-5">
                                   
                                    <div class="input-group col-md-9 col-10">
                                        <span class="col-md-12">Observación:</span>
                                        <textarea class="form-control" id ="observacion"  aria-label="With textarea" placeholder="nota: la informacion a editar sera aprobada por el administrador" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=" row no-guters">
                                <div class="col-md-2 col-2 "></div>
                                <div class=" col-md-10 col-5 mb-2">
                                    <button type="button" data-dismiss="modal" id="modificar_produccion" class="mx-4 col-md-6 btn btn-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
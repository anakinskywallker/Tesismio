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

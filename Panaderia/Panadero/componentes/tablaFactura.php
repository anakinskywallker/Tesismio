<?php
session_start();
require_once "../../Administrador/php/conexion.php";
$conexion = conexion();

?>

<table class="table table-striped" style="cursor: pointer;">
    <thead>
        <tr class="bg-secondary">
            <th scope="col">Prod.</th>
            <th scope="col">Cant.</th>
            <th scope="col">C/Band.</th>
            <th>Editar. </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $deuda = 0;
        $ganancia = 0;
        $fefn = date("Y-m-d H:i:s");


        $sql = " SELECT NOMBRE,APELLIDOS,CELULAR,TIPO,SALARIO,PERSONAL_ID,CEDULA,LOGIN_NOMBRE,PASSWORD,PERSONAL_ID FROM personal WHERE ESTADO = 1";

        $result = mysqli_query($conexion, $sql);
        while ($ver = mysqli_fetch_row($result)) {
            $datos = $ver[7] . "||" .
                $ver[8] . "||" .
                $ver[0] . "||" .
                $ver[1] . "||" .
                $ver[6] . "||" .
                $ver[2] . "||" .
                $ver[4] . "||" .
                $ver[9];

        ?>

            <tr>
                <td>Tostadas </td>
                <td>200</td>
                <td>000 </td>
                <td>
                    <a data-toggle="modal" data-target="#Edicion" onclick="agregaform('<?php echo $datos ?>')" role="button">
                        <i class="fas fa-edit fa-fw"></i> 
                    </a>
                </td>
                
            </tr>
            
            
        <?php
        }
        ?>

    </tbody>
</table>

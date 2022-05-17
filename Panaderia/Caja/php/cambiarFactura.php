<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];
    $ob=$_POST['observacion'];
	$sql="UPDATE facturas SET OBSERVACION = '$ob' ,FAC_ESTADO = 2 WHERE FACTURAS_ID = '$ide'";
     echo $result=mysqli_query($conexion,$sql);
?>
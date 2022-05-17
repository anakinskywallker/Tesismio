<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];
    $ide2= $ide - 1;
    $ob=$_POST['observacion'];
	$sql="UPDATE facturas SET OBSERVACION = '$ob' ,FAC_ESTADO = '0' WHERE FACTURAS_ID = '$ide'";
    $sql2="UPDATE ventas SET VEN_ESTADO = '0' WHERE FACTURAS_ID = '$ide2'";
    $result2=mysqli_query($conexion,$sql2);
    $result=mysqli_query($conexion,$sql);

    
?>
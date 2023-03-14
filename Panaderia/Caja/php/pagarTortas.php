<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];

  

    $sql="UPDATE facturas SET FAC_SALDO = 0 ,FAC_ESTADO = 1 WHERE FACTURAS_ID = '$ide'";
    echo $result=mysqli_query($conexion,$sql);
?>
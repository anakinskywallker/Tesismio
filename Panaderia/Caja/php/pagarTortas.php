<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];

    $sql3= " SELECT FAC_ESTADO FROM facturas WHERE FACTURAS_ID = '$ide'";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $estado = $var[0];
	$s=0;

	if ($estado == 3)
   {  
      $s=1;
   }
   elseif($estado == 2)
   {
      $s=1;
   }

	$sql="UPDATE facturas SET FAC_SALDO = 0 ,FAC_ESTADO = 1 WHERE FACTURAS_ID = '$ide'";
    echo $result=mysqli_query($conexion,$sql);
?>
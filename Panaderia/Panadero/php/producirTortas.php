<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];

    $sql3= " SELECT FAC_ESTADO FROM facturas WHERE FACTURAS_ID = '$ide'";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $estado = $var[0];
	$s=0;

	if ($estado == 4)
   {  
      $s=2;
   }
   elseif($estado == 5)
   {
      $s=3;
   }

	$sql="UPDATE facturas SET FAC_ESTADO = '$s' WHERE FACTURAS_ID = '$ide'";
    echo $result=mysqli_query($conexion,$sql);
?>
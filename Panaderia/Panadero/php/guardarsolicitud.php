<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$observacion=$_POST['observacion'];
  
    $sql2= " SELECT * FROM aux2 WHERE id = '30'";
    $result2=mysqli_query($conexion,$sql2);
    $var=mysqli_fetch_row($result2);
    $id_producto = $var[4];
    $sql5="UPDATE produccion SET Estado ='2', OBSERVACION_='$observacion' WHERE PRO_ID = '$id_producto'";
    echo $result5=mysqli_query($conexion,$sql5);	 
	
 ?>
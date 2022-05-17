
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$sql="TRUNCATE  caja ";
	echo $result=mysqli_query($conexion,$sql);
 ?>    

<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="UPDATE productos SET 	PRO_ESTADO='0' WHERE PRO_ID ='$id'"; // 0 in activo 
	echo $result=mysqli_query($conexion,$sql);
 ?>    
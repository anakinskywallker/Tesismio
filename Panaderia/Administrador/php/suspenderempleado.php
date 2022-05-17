
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="UPDATE personal SET ESTADO= '0' WHERE PERSONAL_ID ='$id'"; // 0 in activo 
	echo $result=mysqli_query($conexion,$sql);
 ?>    
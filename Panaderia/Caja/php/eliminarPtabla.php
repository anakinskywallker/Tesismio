
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from caja where pro_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>    
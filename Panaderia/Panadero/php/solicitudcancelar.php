<?php 

	require_once "conexion.php";
	$conexion=conexion();
  $id=$_POST['id'];

    $sql="UPDATE aux2 SET tipo='$id' where id='30'";
    $result=mysqli_query($conexion,$sql); 
    echo $result=mysqli_query($conexion,$sql);
	
?>
<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];
	$sql="UPDATE aux2 SET tipo='$ide' where id='20'";
    $result=mysqli_query($conexion,$sql); 
    echo $result=mysqli_query($conexion,$sql);
?>
<?php
    require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['id'];
    $tipo=$_POST['tipo'];
    $estatico = 10;
	
    $sql="UPDATE aux2 set      tipo='$tipo',
                               fechain='$nombre'
				where id='$estatico'";
     echo $result=mysqli_query($conexion,$sql);

?>

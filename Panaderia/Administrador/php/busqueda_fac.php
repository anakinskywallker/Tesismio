<?php
    require_once "conexion.php";
	$conexion=conexion();
	$id_fac=$_POST['id'];
    $fechain=$_POST['fechain'];
	$fechafn=$_POST['fechafn'];
	$tipo=$_POST['tipo'];
    $estatico = 1;
	
    $sql="UPDATE aux2 set       id_fac=$id_fac,
                                fechain='$fechain',
								fechafn='$fechafn',
								tipo='$tipo'
				where id='$estatico'";
     echo $result=mysqli_query($conexion,$sql);

?>

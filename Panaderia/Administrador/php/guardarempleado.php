<?php 
	require_once "conexion.php";
	$conexion=conexion();
    
	$nu=$_POST['nomus'];
	$p=$_POST['pasword'];
    $n=$_POST['nombre'];
	$a=$_POST['apellido'];
    $c=$_POST['cedula'];
	$t=$_POST['celular'];
	$s=$_POST['salario'];
    $tipo=$_POST['tipo'];

	$sql="INSERT INTO personal( NOMBRE, APELLIDOS, CEDULA, CELULAR, SALARIO, TIPO, LOGIN_NOMBRE, PASSWORD, ESTADO) VALUES ('$n','$a','$c','$t','$s','$tipo','$nu','$p','1')";
	 echo $result=mysqli_query($conexion,$sql);

 ?>

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
    $id=$_POST['id'];

	$sql="UPDATE personal SET LOGIN_NOMBRE='$nu',PASSWORD='$p',NOMBRE='$n',APELLIDOS='$a',CEDULA='$c',CELULAR='$t',SALARIO='$s'
				WHERE PERSONAL_ID ='$id'";
	 echo $result=mysqli_query($conexion,$sql);

 ?>
 
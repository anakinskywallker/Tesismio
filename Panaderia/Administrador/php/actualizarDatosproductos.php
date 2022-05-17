<?php 
	require_once "conexion.php";
	$conexion=conexion();
    
	$id=$_POST['id'];
	$n=$_POST['nombrep'];
    $t=$_POST['tipo'];
    $cs=$_POST['clase'];
	$c=$_POST['costo'];
	$p=$_POST['precio'];
    $ca=$_POST['cantidad'];

	$sql="UPDATE productos SET PRO_COSTO='$c',PRO_VENTA='$p',PRO_NOMBRE='$n',PRO_TIPO='$t',PRO_CLASE='$cs',PRO_CANTIDAD='$ca'
				WHERE PRO_ID='$id'";
	 echo $result=mysqli_query($conexion,$sql);

 ?>
 
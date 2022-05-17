<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$c=$_POST['cantidad'];
    $p=$_POST['preciou'];
	
    $sql1= " SELECT * FROM aux where id='1' ";
    $result4=mysqli_query($conexion,$sql1);    
    $fila = mysqli_fetch_row($result4);
    
    $ide = $fila[1] ;
    $ide_f = $fila[2];
    $nombre = $fila[3] ;
   
    $t = $c * $p ;
    
	$sql="INSERT into caja (id_factura,pro_id,nombre,cantidad,valor_unidad,total)
								values ('$ide_f','$ide','$nombre','$c','$p','$t')";
	echo $result=mysqli_query($conexion,$sql);
    
 ?>
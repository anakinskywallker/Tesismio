<?php
    require_once "conexion.php";
	$conexion=conexion();
	$ide=$_POST['id'];
    $n=$_POST['nombre'];
	$f=$_POST['foto'];
	$v=$_POST['valor'];
    $estatico = 1;
	
    $sql1= " SELECT FACTURAS_ID FROM facturas WHERE FACTURAS_ID = (SELECT MAX(FACTURAS_ID) FROM facturas) ";
    $result4=mysqli_query($conexion,$sql1);    
    $fila = mysqli_fetch_row($result4);
    $tem = $fila[0] + 1;                
    echo $tem ;

    $sql="UPDATE aux set        ide='$ide',
                                num_factura='$tem',
								nombre='$n',
								foto='$f',
								valor='$v'
				where id='$estatico'";
     echo $result=mysqli_query($conexion,$sql);
?>



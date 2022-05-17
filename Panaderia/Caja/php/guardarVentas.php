<?php 

	require_once "conexion.php";
	$conexion=conexion();
//-----------------------------------------------------------------------------------------------	
    $sql1= " SELECT * FROM caja ";
    $result=mysqli_query($conexion,$sql1);    
    while($fila=mysqli_fetch_row($result)){ 
       $ide_f = $fila[0] - 1;
       $ide = $fila[1];
       $nombre = $fila[2] ;
       $cantidad =$fila[3];
       $total = $fila[5] ;
        
              
       $sql="INSERT into ventas (PRO_ID,FACTURAS_ID,VEN_CANTIDAD,VEN_FECHA,VEN_VALOR)
								values ('$ide','$ide_f','$cantidad','$fecha_actual','$total')";
       $result1=mysqli_query($conexion,$sql);
    }
//------------------------------------------------------------------------------------------------------------------------	
 ?>
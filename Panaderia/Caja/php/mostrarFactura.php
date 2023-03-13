<?php 

	require_once "conexion.php";
	$conexion=conexion();
//-----------------------------------------------------------------------------------------------	
    $ide=$_POST['id'];
    $ide_aux= $ide - 1;
    $sql3="TRUNCATE  aux3 ";
	$result=mysqli_query($conexion,$sql3);
    $sql1= " SELECT productos.PRO_NOMBRE,ventas.VEN_CANTIDAD,productos.PRO_COSTO,ventas.VEN_VALOR, facturas.FAC_SALDO FROM ventas INNER JOIN facturas ON facturas.FACTURAS_ID=ventas.FACTURAS_ID  INNER JOIN productos ON productos.PRO_ID = ventas.PRO_ID where ventas.FACTURAS_ID = $ide_aux ";
    $result=mysqli_query($conexion,$sql1);    
    while($fila=mysqli_fetch_row($result)){ 
       $nombre = $fila[0] ;
       $cantidad =$fila[1];
       $costo = $fila[2];
       $total = $fila[3] ;
       $saldo = $fila[4] ;
        
              
       $sql="INSERT into aux3 (no_factura,nombre,cantidad,costo,total, saldo)
								values ('$ide','$nombre','$cantidad','$costo','$total',$saldo)";
       $result1=mysqli_query($conexion,$sql);
    }
//------------------------------------------------------------------------------------------------------------------------	
 ?>
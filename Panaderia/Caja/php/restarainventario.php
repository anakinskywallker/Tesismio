<?php 

	require_once "conexion.php";
	$conexion=conexion();
//------------------------------------------------------------
    $sql3= " SELECT FACTURAS_ID FROM facturas WHERE FACTURAS_ID = (SELECT MAX(FACTURAS_ID) FROM facturas) ";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $id_fac = $var[0] - 1;
   // echo "Id factura = $var[0] ";

        $sql1= " SELECT PRO_ID, VEN_CANTIDAD FROM ventas WHERE FACTURAS_ID = '$id_fac' ";
        $result1=mysqli_query($conexion,$sql1);    
        while($fila=mysqli_fetch_row($result1)){ 
            $pro_id = $fila[0];
            $ven_can = $fila[1];
    //  echo "producto id = $pro_id ";
    //  echo "Producto cantidad = $ven_can ";    
                    
                $sql2="SELECT PRO_CANTIDAD FROM productos WHERE PRO_ID = '$pro_id' ";
                $result2=mysqli_query($conexion,$sql2);
                $tem=mysqli_fetch_row($result2);
                $cantidad = $tem[0] - $ven_can;
      //  echo "Cantidad actual = $tem[0] ";
      //  echo "Cantidad modificada = $cantidad ";
                $sql3="UPDATE productos SET PRO_CANTIDAD ='$cantidad' WHERE PRO_ID = '$pro_id'";
                $result3=mysqli_query($conexion,$sql3);
    
    }
//-----------------------------------------------------------------------------------------------	 
	
 ?>
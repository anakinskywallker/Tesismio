<?php 

	require_once "conexion.php";
	$conexion=conexion();
//-----------------------------------------------------------------------------------------------------------------------------------------
    $sql3= " SELECT FACTURAS_ID,FAC_VALORTIPO,FAC_FLAG FROM facturas WHERE FACTURAS_ID = (SELECT MAX(FACTURAS_ID) FROM facturas ) ";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $id_fac = $var[0] - 1;
    $outorin = $var[1];
    $flag = $var[2];
   // echo "idefactura = $id_fac ";
   // echo "bandera = $outorin ";
   // echo "activa = $flag";
  if( $flag == 0){
        if ( $outorin == 0)
                {
                    $sql1= " SELECT PRO_ID, VEN_CANTIDAD, VEN_VALOR FROM ventas WHERE FACTURAS_ID = '$id_fac' ";
                    $result1=mysqli_query($conexion,$sql1);    
                    while($fila=mysqli_fetch_row($result1)){ 
                          $pro_id = $fila[0];
                          $ven_can = $fila[1];
                          $ven_valor = $fila[2] / $ven_can; 
                          $venta = $ven_valor + ($ven_valor * 0.25);
                            
                        $sql2="SELECT PRO_CANTIDAD FROM productos WHERE PRO_ID = '$pro_id' ";
                         $result2=mysqli_query($conexion,$sql2);
                         $tem=mysqli_fetch_row($result2);
                         $cantidad = $tem[0] + $ven_can;
      //  echo "Cantidad actual = $tem[0] ";
      //  echo "Cantidad modificada = $cantidad ";
                          $sql3="UPDATE productos SET PRO_CANTIDAD ='$cantidad', PRO_COSTO ='$ven_valor', PRO_VENTA = '$venta' WHERE PRO_ID =       '$pro_id'";
                          $result3=mysqli_query($conexion,$sql3);
    
                            $sql4="UPDATE facturas SET FAC_FLAG = '1' WHERE FACTURAS_ID = '$var[0]'";
                            $result4=mysqli_query($conexion,$sql4);
    
                } 
                }else 
                {
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
       // echo "Cantidad actual = $tem[0] ";
       // echo "Cantidad modificada = $cantidad ";
                        $sql3="UPDATE productos SET PRO_CANTIDAD ='$cantidad' WHERE PRO_ID = '$pro_id'";
                        $result3=mysqli_query($conexion,$sql3);
                $sql4="UPDATE facturas SET FAC_FLAG = '1' WHERE FACTURAS_ID = '$var[0]'";
                $result4=mysqli_query($conexion,$sql4);
                        }
                    
                }
      }else {}
              
//----------------------------------------------------------------------------------------------------------------------------------------	 
	
 ?>
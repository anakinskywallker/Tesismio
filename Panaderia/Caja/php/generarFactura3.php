<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
    $t=$_POST['total'];
    $p=$_POST['pago'];
    $fecha=$_POST['fecha'];
    $telefono=$_POST['telefono'];
    $descripcion=$_POST['descripcion'];
    $nombreu=$_POST['nombreU'];
    $s = $p - $t;
 //------------------------------------------------------------   
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date ("Y-m-d H:i:s");
  //------------------------------------------------------------
    $sql3= " SELECT * FROM personal WHERE NOMBRE = '$nombre'";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $id_p = $var[0];
 //-----------------------------------------------------------------------------------------------

   if ($s < 0)
   {  
      $s=$s*-1;
      $estado = 3;
   }
   else
   {
      $s = 0;
      $estado = 1;
   }
    $sql2="INSERT INTO facturas (PERSONAL_ID, FAC_FECHA, FAC_VALOR, PAGO, FAC_VALORTIPO, FAC_ESTADO, FAC_SALDO) 
    VALUES ('$id_p','$fecha_actual','$t','$p','1','$estado','$s')";
    $result2=mysqli_query($conexion,$sql2);

//-----------------------------------------------------------------------------------------------	
    $sql1= " SELECT * FROM caja ";
    $result=mysqli_query($conexion,$sql1);    
    while($fila=mysqli_fetch_row($result)){ 
       $ide_f = $fila[0] - 1;
       $ide = $fila[1];
       $nombre = $fila[2] ;
       $cantidad =$fila[3];
       $total = $fila[5] ;
       $factura=$fila[0]; 
        
              
       $sql="INSERT into ventas (PRO_ID,FACTURAS_ID,VEN_CANTIDAD,VEN_FECHA,VEN_VALOR,VEN_TIPO,VEN_ESTADO)
								values ('$ide','$ide_f','$cantidad','$fecha_actual','$total','1','1')";
       $result1=mysqli_query($conexion,$sql);
    }
//-----------------------------------------------------------------------------------------------	 
	//-----------------------------------------------------------------------------------------------	
 
                 
   $sqltorta="INSERT into encargostortas (FECHA_ENTREGA,TELEFONO,DESCRIPCION,ID_FACTURA, NOMBREU)
                       values ('$fecha','$telefono','$descripcion','$factura','$nombreu')";
   echo $resulttorta=mysqli_query($conexion,$sqltorta);
   
//-----------------------------------------------------------------------------------------------
 ?>
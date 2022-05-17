<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
    $t=$_POST['total'];
    $p=$_POST['pago'];
 //------------------------------------------------------------   
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date ("Y-m-d H:i:s");
  //------------------------------------------------------------
    $sql3= " SELECT * FROM personal WHERE NOMBRE = '$nombre'";
    $result3=mysqli_query($conexion,$sql3);
    $var=mysqli_fetch_row($result3);
    $id_p = $var[0];
 //-----------------------------------------------------------------------------------------------

    
    $sql2="INSERT INTO facturas (PERSONAL_ID, FAC_FECHA, FAC_VALOR, PAGO, FAC_VALORTIPO, FAC_ESTADO) 
    VALUES ('$id_p','$fecha_actual','$t','$p','1','1');";
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
        
              
       $sql="INSERT into ventas (PRO_ID,FACTURAS_ID,VEN_CANTIDAD,VEN_FECHA,VEN_VALOR,VEN_TIPO)
								values ('$ide','$ide_f','$cantidad','$fecha_actual','$total','1')";
       $result1=mysqli_query($conexion,$sql);
    }
//-----------------------------------------------------------------------------------------------	 
	
 ?>
<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
   $t=$_POST['total'];
 //------------------------------------------------------------   
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date ("Y-m-d H:i:s");
  //-----------------------------personal-------------------------------
    $sql1= " SELECT * FROM personal WHERE NOMBRE = '$nombre'";
    $result1=mysqli_query($conexion,$sql1);
    $var=mysqli_fetch_row($result1);
    $id_personal = $var[0];
    //------------------------------producto------------------------------
    $sql2= " SELECT * FROM aux2 WHERE id = '20'";
    $result2=mysqli_query($conexion,$sql2);
    $var=mysqli_fetch_row($result2);
    $id_producto = $var[4];
    
 //-----------------------------------------------------------------------------------------------
      $sql3="INSERT INTO produccion (PERSONAL_ID, PRO_ID, FECHA, TIPO, CANTIDAD) 
      VALUES ('$id_personal','$id_producto','$fecha_actual','0','$t')";
      $result3=mysqli_query($conexion,$sql3);

//-----------------------------------------------------------------------------------------------	
$sql4="SELECT PRO_CANTIDAD FROM productos WHERE PRO_ID = '$id_producto'";
$result4=mysqli_query($conexion,$sql4);
$tem=mysqli_fetch_row($result4);
$cantidad = $tem[0] + $t;

$sql5="UPDATE productos SET PRO_CANTIDAD ='$cantidad' WHERE PRO_ID = '$id_producto'";
echo $result5=mysqli_query($conexion,$sql5);
//-----------------------------------------------------------------------------------------------	 
	
 ?>
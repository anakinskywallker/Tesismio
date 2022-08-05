

<?php 
		function conexion()  {
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="panaderia";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
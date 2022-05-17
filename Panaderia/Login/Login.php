<?php
	session_start();
	include '../conexion.php';	
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PANADERIA</title>

  <!-- menu CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- tipo de fuentes -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> <!-- este es para los iconos -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- CSS  Principal -->
  <link href="../css/agency.min.css" rel="stylesheet">
    <link href="../css/Loggin.css" rel="stylesheet">
</head>

<body>

   

  <!-- Header -->
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <br>
        <span class="fa-stack fa-2x" href="">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x" ></i>
          </span>
      
    </div>

    <!-- Login Form -->
    <form name="formulario" method="POST" action="validarLogin.php">
      <input type="text" id="login" class="fadeIn second" name="user" placeholder="&#128272;Usuario" require>
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="&#128272;Contraseña" require>
      <input type="submit" class="fadeIn fourth" value="Iniciar Sesión" name="login">
    </form>

    <!-- Remind Passowrd -->
   

  </div>
</div>
</body>

</html>
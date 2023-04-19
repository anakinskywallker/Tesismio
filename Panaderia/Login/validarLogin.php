<?php
session_start();

include ("../conexion.php"); // saber como conectarse a la base de datos
if(isset($_POST['login'])){
  $username = $_POST['user'];
  $contra = $_POST['pass'];
  
  $passCodificado = md5($contra);
  
  $mysqli = new mysqli($host, $user, $pw, $db);
                
  $sql = "SELECT * from personal where LOGIN_NOMBRE='$username'";
  $result1 = $mysqli->query($sql);
  $row1 = $result1->fetch_array(MYSQLI_NUM);
  $numero_filas = $result1->num_rows;
  
     
  if ($numero_filas > 0)
    {
      $password = $row1[9]; 
      $habilitado = $row1[10];
    
      if($habilitado == '1'){
        
        if ($password == $contra)      
          {      
                $_SESSION["autenticado"]= "SI";
                $tipo_usuario = $row1[6];
                $nombre_usuario = $row1[1];
                $_SESSION["Usuario"] = $username;
                
                //revisar que puede afectar
                if ($tipo_usuario == 1){
                      $_SESSION["tipo_usuario"]= "Administrador";
                      $_SESSION["nombre_usuario"]= $nombre_usuario; 
  
                        ?>
        
                      <script type="text/javascript"> 
                                window.location="../Administrador/AdminP.php"; 
                      </script>
                      <?php
                           
                }
                if ($tipo_usuario == 2){
                      $_SESSION["tipo_usuario"]= "cajero";
                      $_SESSION["nombre_usuario"]= $nombre_usuario; 

                        ?>
        
                      <script type="text/javascript"> 
                                window.location="../Caja/caja.php"; 
                      </script>
                      <?php
                    
                }
                if ($tipo_usuario == 3){
                        $_SESSION["tipo_usuario"]= "Panadero";
                        $_SESSION["nombre_usuario"]= $nombre_usuario; 
                          ?>
          
                        <script type="text/javascript"> 
                                  window.location="../Panadero/panadero.php"; 
                        </script>
                        <?php
                                //  header("Location: ../IndexUsuario.php");
                    
                }
         }
         else{
       
             echo'<script type="text/javascript">
                alert("Usuario o contraseña incorrecta");      
               </script>
               <script type="text/javascript"> 
                                  window.location="Login.php"; 
                        </script>
               ';
              
         }
  	  }
      
      else{
        echo'<script type="text/javascript">
                                alert("Usuario Suspendido");
                                window.location.href="../index.php";
         </script>';
       } 
  
    } 
    else{
        echo'<script type="text/javascript">
                              alert("Usuario no encontrado");
                              
      </script>';
    }
 }
 else{
    
  echo'<script type="text/javascript">
  alert("No existe una conexion con la BD");
 
  </script>';

 }

?>
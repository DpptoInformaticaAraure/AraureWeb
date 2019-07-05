<?php
	require("Modelo/class.conexion.php");
	$username=$_POST['user'];
	$pass1=$_POST['pass'];
  $pass=sha1(md5($pass1));

    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login where users = :user and passadmin = :pass";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":user", $username);
    $statement->bindParam(":pass", $pass);
    $statement->execute();
    $result=$statement->fetchAll(); 
   

   if (count($result)) {
    	session_start();
      $_SESSION['users']=$username;
      $_SESSION['pass']=$pass;

      echo '<script>alert("bienvenido '.$username.'")</script> ';
      echo "<script>location.href='vista/inicio.php'</script>";



             
    }

      else

    {

        $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login where users = :user and pass = :pass";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":user", $username);
    $statement->bindParam(":pass", $pass);
    $statement->execute();
    $result=$statement->fetchAll(); 
   

   if (count($result)) {
      session_start();
      $_SESSION['users']=$username;
      $_SESSION['pass']=$pass;

      echo '<script>alert("BIENVENIDO USUARIO")</script> ';
      echo "<script>location.href='vista/inicio2.php'</script>";

    }else{



       echo '<script>alert("usuario no encontrado")</script> ';
       echo "<script>location.href='index.html'</script>";
      
      }


   }  

 ?>
  
 <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

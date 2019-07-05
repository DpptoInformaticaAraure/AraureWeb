<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();
	
	$user = $_POST['user'];
	$passadmin1 = $_POST['passadmin'];
	$pass = $_POST['pass'];
	
	$id = $_POST['id'];

	$passadmin=sha1(md5($passadmin1));
	$pass2=sha1(md5($pass));

	if (strlen($id)>0) {
		
		
		$msj = $consultas -> modificarUsuario('users', $user, $id);
        $msj = $consultas -> modificarUsuario('passadmin', $passadmin, $id);
        $msj = $consultas -> modificarUsuario('pass', $pass2, $id);
        
        echo $msj;

       echo '<script>alert("registro modificado")</script> ';
      echo "<script>location.href='../vista/usuarios.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
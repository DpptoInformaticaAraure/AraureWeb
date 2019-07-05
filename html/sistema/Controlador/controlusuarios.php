<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$user = $_POST['user'];
$pass1 = $_POST['passadmin'];
$pass2 = $_POST['pass'];

if (strlen($user) > 0) {

	$consultas = new Consultar();
	
	        $password=sha1(md5($pass1));
	        $pass=sha1(md5($pass2));
			
	$mensaje = $consultas -> insertarUsuario($user, $password, $pass);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

//echo "<a href='../usuarios.php'>nuevo usuario</a>";
 echo '<script>alert("usuario registrado")</script> ';
      echo "<script>location.href='../vista/usuarios.php'</script>";

?>
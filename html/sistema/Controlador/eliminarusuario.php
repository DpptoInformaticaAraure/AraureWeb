<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['id'])) {
	$arg_id=$_GET['id'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarUsuario($arg_id);
	echo $mensaje;
	echo '<script>alert("usuario eliminado")</script> ';
      echo "<script>location.href='../vista/usuarios.php'</script>";
}


?>
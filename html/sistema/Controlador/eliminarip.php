<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['codigo'])) {
	$arg_codigo=$_GET['codigo'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarIp($arg_codigo);
	echo $mensaje;
	echo '<script>alert("registro eliminado")</script> ';
      echo "<script>location.href='../vista/ips.php'</script>";
}


?>
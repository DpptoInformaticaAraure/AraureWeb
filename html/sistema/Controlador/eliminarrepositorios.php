<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['codigo'])) {
	$arg_codigo=$_GET['codigo'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarRepositorio($arg_codigo);
	echo $mensaje;
	echo '<script>alert("registro eliminado")</script> ';
      echo "<script>location.href='../vista/verrepositorios.php'</script>";
}


?>
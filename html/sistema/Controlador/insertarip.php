<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$ip = $_POST['ip'];
$departamento = $_POST['departamento'];
$equipo = $_POST['equipo'];
$sistema = $_POST['sistema'];
$siap = $_POST['siap'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$observacion = $_POST['observacion'];


if (strlen($ip) > 0 && strlen($departamento) > 0 && strlen($equipo) > 0 && strlen($sistema) > 0 && strlen($siap) > 0 && strlen($usuario) > 0 && strlen($clave) > 0 ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarIp($ip, $departamento, $equipo, $sistema, $siap, $usuario, $clave, $observacion);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("IP Registrada")</script> ';
      echo "<script>location.href='../vista/verips.php'</script>";



?>
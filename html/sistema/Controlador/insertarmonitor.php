<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;


$departamento = $_POST['departamento'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$enciende = $_POST['enciende'];
$cable_c = $_POST['cable_c'];
$cable_vga = $_POST['cable_vga'];
$falla = $_POST['falla'];
$traido = $_POST['traido'];
$recibido = $_POST['recibido'];
$reparado = $_POST['reparado'];
$entregado = $_POST['entregado'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$observacion = $_POST['observacion'];


if (strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($marca) > 0 && strlen($enciende) > 0 && strlen($cable_c) > 0 ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarMonitor($departamento, $tipo, $marca, $enciende, $cable_c, $cable_vga, $falla, $traido, $recibido, $reparado, $entregado, $entrada, $salida, $observacion);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("monitor Registrado")</script> ';
      echo "<script>location.href='../vista/vermonitores.php'</script>";



?>
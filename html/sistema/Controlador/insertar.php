<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;


$departamento = $_POST['departamento'];
$tipo = $_POST['tipo'];
$sistema = $_POST['sistema'];
$siap = $_POST['siap'];
$falla = $_POST['falla'];
$traido = $_POST['traido'];
$recibido = $_POST['recibido'];
$reparado = $_POST['reparado'];
$entregado = $_POST['entregado'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$observacion = $_POST['observacion'];


if (strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($sistema) > 0 && strlen($siap) > 0 && strlen($falla) > 0 ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarEquipo($departamento, $tipo, $sistema, $siap, $falla, $traido, $recibido, $reparado, $entregado, $entrada, $salida, $observacion);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("Equipo Registrado")</script> ';
      echo "<script>location.href='../vista/verequipos.php'</script>";



?>
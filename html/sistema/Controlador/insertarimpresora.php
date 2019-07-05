<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;


$departamento = $_POST['departamento'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$enciende = $_POST['enciende'];
$cable_c = $_POST['cable_c'];
$cable_usb = $_POST['cable_usb'];
$toner = $_POST['toner'];
$falla = $_POST['falla'];
$traido = $_POST['traido'];
$recibido = $_POST['recibido'];
$reparado = $_POST['reparado'];
$entregado = $_POST['entregado'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$observacion = $_POST['observacion'];


if (strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($marca) > 0 && strlen($enciende) > 0
  && strlen($cable_c) > 0 && strlen($cable_usb) > 0 && strlen($toner) > 0 && strlen($falla) > 0 && 
  strlen($traido) > 0 && strlen($recibido) > 0 && strlen($entrada) > 0  ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarImpresora($departamento, $tipo, $marca, $enciende, $cable_c, $cable_usb, $toner, $falla, $traido, $recibido, $reparado, $entregado, $entrada, $salida, $observacion);


   
}else{

	echo "por favor complete los campos";
}
echo $mensaje;

echo '<script>alert("impresora Registrado")</script> ';
	 echo "<script>location.href='../vista/verimpresoras.php'</script>";


?>
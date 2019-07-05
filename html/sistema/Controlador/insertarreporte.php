<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$fecha = $_POST['fecha'];
$reporte = $_POST['reporte'];


if (strlen($fecha) > 0 && strlen($reporte) > 0) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarReporte($fecha, $reporte);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("reporte guardado")</script> ';
      echo "<script>location.href='../vista/insertarreporte.php'</script>";



?>
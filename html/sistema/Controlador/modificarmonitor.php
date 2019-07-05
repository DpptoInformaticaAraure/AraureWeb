<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();

$codigo = $_POST['codigo'];
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

$codigo1 = $_POST['codigo1'];
	

	if (strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($marca) > 0 && strlen($enciende) > 0 && strlen($cable_c) > 0 ) {
		
	
		$msj = $consultas -> modificarMonitor('departamento', $departamento, $codigo1);
        $msj = $consultas -> modificarMonitor('tipo', $tipo, $codigo1);
        $msj = $consultas -> modificarMonitor('marca', $marca, $codigo1);
        $msj = $consultas -> modificarMonitor('enciende', $enciende, $codigo1);
        $msj = $consultas -> modificarMonitor('cable_c', $cable_c, $codigo1);
        $msj = $consultas -> modificarMonitor('cable_vga', $cable_vga, $codigo1);
        $msj = $consultas -> modificarMonitor('falla', $falla, $codigo1);
        $msj = $consultas -> modificarMonitor('traido', $traido, $codigo1);
        $msj = $consultas -> modificarMonitor('recibido', $recibido, $codigo1);
        $msj = $consultas -> modificarMonitor('reparado', $reparado, $codigo1);
        $msj = $consultas -> modificarMonitor('entregado', $entregado, $codigo1);
        $msj = $consultas -> modificarMonitor('entrada', $entrada, $codigo1);
        $msj = $consultas -> modificarMonitor('salida', $salida, $codigo1);
        $msj = $consultas -> modificarMonitor('observacion', $observacion, $codigo1);
        echo $msj;

       echo '<script>alert("monitor modificado")</script> ';
      echo "<script>location.href='../vista/vermonitores.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
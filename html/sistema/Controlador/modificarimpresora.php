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

$codigo1 = $_POST['codigo1'];
	

	if (strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($marca) > 0 && strlen($enciende) > 0 && strlen($cable_c) > 0 ) {
		

		$msj = $consultas -> modificarImpresora('departamento', $departamento, $codigo1);
        $msj = $consultas -> modificarImpresora('tipo', $tipo, $codigo1);
        $msj = $consultas -> modificarImpresora('marca', $marca, $codigo1);
        $msj = $consultas -> modificarImpresora('enciende', $enciende, $codigo1);
        $msj = $consultas -> modificarImpresora('cable_c', $cable_c, $codigo1);
        $msj = $consultas -> modificarImpresora('cable_usb', $cable_usb, $codigo1);
        $msj = $consultas -> modificarImpresora('toner', $toner, $codigo1);
        $msj = $consultas -> modificarImpresora('falla', $falla, $codigo1);
        $msj = $consultas -> modificarImpresora('traido', $traido, $codigo1);
        $msj = $consultas -> modificarImpresora('recibido', $recibido, $codigo1);
        $msj = $consultas -> modificarImpresora('reparado', $reparado, $codigo1);
        $msj = $consultas -> modificarImpresora('entregado', $entregado, $codigo1);
        $msj = $consultas -> modificarImpresora('entrada', $entrada, $codigo1);
        $msj = $consultas -> modificarImpresora('salida', $salida, $codigo1);
        $msj = $consultas -> modificarImpresora('observacion', $observacion, $codigo1);
        echo $msj;

       echo '<script>alert("impresora modificada")</script> ';
      echo "<script>location.href='../vista/verimpresoras.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
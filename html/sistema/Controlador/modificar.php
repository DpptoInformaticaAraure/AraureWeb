<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();

$codigo = $_POST['codigo'];
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

$codigo1 = $_POST['codigo'];
	

	if (strlen($codigo) > 0 && strlen($departamento) > 0 && strlen($tipo) > 0 && strlen($sistema) > 0 && strlen($siap) > 0 && strlen($falla) > 0 ) {
		
		$msj = $consultas -> modificarEquipo('codigo', $codigo, $codigo1);
		$msj = $consultas -> modificarEquipo('departamento', $departamento, $codigo1);
        $msj = $consultas -> modificarEquipo('tipo', $tipo, $codigo1);
        $msj = $consultas -> modificarEquipo('sistema', $sistema, $codigo1);
        $msj = $consultas -> modificarEquipo('siap', $siap, $codigo1);
        $msj = $consultas -> modificarEquipo('falla', $falla, $codigo1);
        $msj = $consultas -> modificarEquipo('traido', $traido, $codigo1);
        $msj = $consultas -> modificarEquipo('recibido', $recibido, $codigo1);
        $msj = $consultas -> modificarEquipo('reparado', $reparado, $codigo1);
        $msj = $consultas -> modificarEquipo('entregado', $entregado, $codigo1);
        $msj = $consultas -> modificarEquipo('entrada', $entrada, $codigo1);
        $msj = $consultas -> modificarEquipo('salida', $salida, $codigo1);
        $msj = $consultas -> modificarEquipo('observacion', $observacion, $codigo1);
        echo $msj;

       echo '<script>alert("equipo modificado")</script> ';
      echo "<script>location.href='../vista/verequipos.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
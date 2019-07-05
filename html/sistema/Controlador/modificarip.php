<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();

$ip = $_POST['ip'];
$departamento = $_POST['departamento'];
$equipo = $_POST['equipo'];
$sistema = $_POST['sistema'];
$siap = $_POST['siap'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$observacion = $_POST['observacion'];

$codigo1 = $_POST['ip'];
	

	if (strlen($ip) > 0 ) {
		
		$msj = $consultas -> modificarIp('ip', $ip, $codigo1);
		$msj = $consultas -> modificarIp('departamento', $departamento, $codigo1);
        $msj = $consultas -> modificarIp('equipo', $equipo, $codigo1);
        $msj = $consultas -> modificarIp('sistema', $sistema, $codigo1);
        $msj = $consultas -> modificarIp('siap', $siap, $codigo1);
        $msj = $consultas -> modificarIp('usuario', $usuario, $codigo1);
        $msj = $consultas -> modificarIp('clave', $clave, $codigo1);
        $msj = $consultas -> modificarIp('observacion', $observacion, $codigo1);
        echo $msj;

       echo '<script>alert("IP modificado")</script> ';
      echo "<script>location.href='../vista/ips.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
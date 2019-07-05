<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$repositorios = $_POST['repositorios'];


$codigo1 = $_POST['id'];
	

	if (strlen($id) > 0) {
		
		$msj = $consultas -> modificarRepositorio('id', $id, $codigo1);
		$msj = $consultas -> modificarRepositorio('nombre', $nombre, $codigo1);
    $msj = $consultas -> modificarRepositorio('repositorios', $repositorios, $codigo1);

        echo $msj;

       echo '<script>alert("repositorio modificado")</script> ';
      echo "<script>location.href='../vista/verrepositorios.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
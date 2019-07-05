<?php

class Conexion{

	public function get_conexion(){

		$conexion= new pdo('pgsql:host=localhost;port=5432;dbname=sistema', "postgres", "AAEQD0324");

       return $conexion;
	}


}

?>

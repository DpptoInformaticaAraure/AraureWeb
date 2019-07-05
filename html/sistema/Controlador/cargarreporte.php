<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarReportes();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>fecha:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['fecha']."</td>";

			
             $codigo=$fila['fecha'];
            echo "<td><a href='verequipo.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminar.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificar.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarReporte1($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>fecha:</th>
				<th>reporte:</th>

				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['fecha']."</td>";
			echo "<td>".$fila['reporte']."</td>";
			echo "<td><a href='verequipo.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminar.php?codigo=".$fila['codigo']."'>Eliminar</a></td>";
			echo "<td><a href='modificar.php?codigo=".$fila['codigo']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>
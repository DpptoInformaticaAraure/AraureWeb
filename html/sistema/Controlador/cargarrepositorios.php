<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarRepositorios();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			     <th>id:</th>
				<th>nombre:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
		    echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['nombre']."</td>";

			
             $codigo=$fila['id'];
            echo "<td><a href='verrepositorio2.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarrepositorios.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarrepositorios.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarRepositorio1($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			    <th>id:</th>
				<th>nombre:</th>


				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
		    echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['nombre']."</td>";
			$codigo=$fila['id'];
			echo "<td><a href='verrepositorio2.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarrepositorios.php?codigo=".$fila['codigo']."'>Eliminar</a></td>";
			echo "<td><a href='modificarrepositorios.php?codigo=".$fila['codigo']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>
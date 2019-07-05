<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarEquipos();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>COD:</th>
				<th>DEP:</th>
				<th>TIPO:</th>
				<th>SO:</th>
				<th>SIAP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['sistema']."</td>";
			echo "<td>".$fila['siap']."</td>";


			
             $codigo=$fila['codigo'];
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
	$filas = $consultar->buscarEquipo1($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>CODIGO:</th>
				<th>DEP:</th>
				<th>TIPO:</th>
				<th>SO:</th>
				<th>SIAP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['sistema']."</td>";
			echo "<td>".$fila['siap']."</td>";

			echo "<td><a href='verequipo.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminar.php?codigo=".$fila['codigo']."'>Eliminar</a></td>";
			echo "<td><a href='modificar.php?codigo=".$fila['codigo']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>
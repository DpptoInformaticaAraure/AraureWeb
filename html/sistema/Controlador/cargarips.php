<?php
function cargar(){
	$consultar= new Consultar();
	$filas = $consultar->cargarIps();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>IP:</th>
				<th>DEP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['ip']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			$codigo3=$fila['siap'];
             $codigo=$fila['ip'];
            echo "<td><a href='verip.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarip.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarip.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarIp1($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>IP:</th>
				<th>DEP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

		if (isset($filas)) {


			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['ip']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			$codigo3=$fila['siap'];
             $codigo=$fila['ip'];
            echo "<td><a href='verip.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarip.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarip.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function siap($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarSiap($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>IP:</th>
				<th>DEP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

		if (isset($filas)) {


			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['ip']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			$codigo3=$fila['siap'];
             $codigo=$fila['ip'];
            echo "<td><a href='verip.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarip.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarip.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}


?>
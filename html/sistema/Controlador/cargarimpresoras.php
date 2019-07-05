<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarImpresoras();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>COD:</th>
				<th>DEP:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			
             $codigo=$fila['codigo'];
            echo "<td><a href='verimpresora.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarimpresora.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarimpresora.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarImpresora($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>COD:</th>
				<th>DEPARTAMENTO:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td><a href='verimpresoras.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarimpresora.php?codigo=".$fila['codigo']."'>Eliminar</a></td>";
			echo "<td><a href='modificarimpresora.php?codigo=".$fila['codigo']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>
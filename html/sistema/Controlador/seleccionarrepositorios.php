<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarRepositorio($codigo);
			foreach ($filas as $fila) {
				echo '
				<h2>MODIFICAR REPORTE</h2>
				<form action="../Controlador/modificarrepositorio.php" method="post"> 
				<div class="form-group">
				<label for="pwd">Codigo:</label>
				<input type="text" name="id" value="'.$fila['id'].'"  class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			  <label for="pwd">Fecha:</label>
			  <input type="date" name="nombre" value="'.$fila['nombre'].'"  class="form-control" id="pwd">
			</div>
			<div class="form-group"> 
			<label for="pwd">Reporte:</label> </br>
		   <textarea name="repositorios" rows="30" cols="100" id="pwd" class="form-control"  >'.$fila['repositorios'].'</textarea>
		   </div>
		   <input type="hidden" name="codigo1" value="'.$codigo.'">

					<input class="btn btn-success" type="submit" value="Modificar reporte">
					<a href="verrepositorios.php" class="btn btn-danger">volver</a>

    
                </form>
                </center>

			';
			}
			
		}
}

?>

 <?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarRepositorio($codigo);
			foreach ($filas as $fila) {
				echo '
				<div class="form-group">
				<label for="pwd">Codigo:</label>
				<input type="text" name="id" value="'.$fila['id'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			  <label for="pwd">Fecha:</label>
			  <input type="text" name="nombre" value="'.$fila['nombre'].'" disabled class="form-control" id="pwd">
			</div>
			<div class="form-group"> 
			<label for="pwd">Reporte:</label> </br>
		   <textarea name="observacion" rows="30" cols="100" id="pwd" class="form-control"  >'.$fila['repositorios'].'</textarea>
		   </div>
              
			
				<a href="verrepositorios.php" class="btn btn-success">volver</a>
		
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>

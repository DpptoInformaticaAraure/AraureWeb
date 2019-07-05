<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarMonitor($codigo);
			foreach ($filas as $fila) {
				echo ' <h2>MONITOR</h2>
				<div class="form-group">
				<label for="usr">Codigo:</label>
				<input type="text"   name="codigo" value="'.$fila['codigo'].'" disabled class="form-control" id="usr">
			  </div>
			  <div class="form-group">
				<label for="pwd">Departamento:</label>
				<input type="text" name="departamento" value="'.$fila['departamento'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Tipo:</label>
				<input type="text" name="tipo" value="'.$fila['tipo'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Marca:</label>
				<input type="text" name="sistema" value="'.$fila['marca'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Enciende:</label>
				<input type="text" name="siap" value="'.$fila['enciende'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			  <label for="pwd">Cable Corriente:</label>
			  <input type="text" name="sistema" value="'.$fila['cable_c'].'" disabled class="form-control" id="pwd">
			</div>
			<div class="form-group">
			  <label for="pwd">Cable vga:</label>
			  <input type="text" name="siap" value="'.$fila['cable_vga'].'" disabled class="form-control" id="pwd">
			</div>
			  <div class="form-group">
				<label for="pwd">Falla:</label>
				<input type="text" name="falla" value="'.$fila['falla'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Traido:</label>
				<input type="text" name="departamento" value="'.$fila['traido'].'" disabled class="form-control" id="pwd">
			  </div>    
			  <div class="form-group">
				<label for="pwd">Recibido:</label>
				<input type="text" name="departamento" value="'.$fila['recibido'].'" disabled class="form-control" id="pwd">
			  </div>    
			   <div class="form-group">
				<label for="pwd">Reparado:</label>
				<input type="text" name="departamento" value="'.$fila['reparado'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Entregado:</label>
				<input type="text" name="departamento" value="'.$fila['entregado'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Entrada:</label>
				<input type="text" name="departamento" value="'.$fila['entrada'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
				<label for="pwd">Salida:</label>
				<input type="text" name="departamento" value="'.$fila['salida'].'" disabled class="form-control" id="pwd">
			  </div>
			  <div class="form-group"> 
			   <label for="pwd">Observacion:</label> </br>
			  <textarea name="observacion" rows="5" cols="50" id="pwd" disabled>'.$fila['observacion'].'</textarea>
			  </div>


				
				<input type="hidden" name="codigo1" value="'.$codigo.'">

				
				<a href="vermonitores.php" class="btn btn-success">volver</a>
			
	
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>
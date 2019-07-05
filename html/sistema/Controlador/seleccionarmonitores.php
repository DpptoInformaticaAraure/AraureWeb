<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarMonitor($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="../Controlador/modificarmonitor.php" method="post"> 

							 <h2>MONITOR</h2>
							 <div class="form-group">
							 <label for="usr">Codigo:</label>
							 <input type="text"   name="codigo" value="'.$fila['codigo'].'" disabled class="form-control" id="usr">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Departamento:</label>
							 <input type="text" name="departamento" value="'.$fila['departamento'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Tipo:</label>
							 <input type="text" name="tipo" value="'.$fila['tipo'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Marca:</label>
							 <input type="text" name="marca" value="'.$fila['marca'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Enciende:</label>
							 <input type="text" name="enciende" value="'.$fila['enciende'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Cable Corriente:</label>
							 <input type="text" name="cable_c" value="'.$fila['cable_c'].'"  class="form-control" id="pwd">
						 </div>
						 <div class="form-group">
							 <label for="pwd">Cable vga:</label>
							 <input type="text" name="cable_vga" value="'.$fila['cable_vga'].'"  class="form-control" id="pwd">
						 </div>
							 <div class="form-group">
							 <label for="pwd">Falla:</label>
							 <input type="text" name="falla" value="'.$fila['falla'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Traido:</label>
							 <input type="text" name="traido" value="'.$fila['traido'].'"  class="form-control" id="pwd">
							 </div>    
							 <div class="form-group">
							 <label for="pwd">Recibido:</label>
							 <input type="text" name="recibido" value="'.$fila['recibido'].'"  class="form-control" id="pwd">
							 </div>    
								<div class="form-group">
							 <label for="pwd">Reparado:</label>
							 <input type="text" name="reparado" value="'.$fila['reparado'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Entregado:</label>
							 <input type="text" name="entregado" value="'.$fila['entregado'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Entrada:</label>
							 <input type="date" name="entrada" value="'.$fila['entrada'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group">
							 <label for="pwd">Salida:</label>
							 <input type="date" name="salida" value="'.$fila['salida'].'"  class="form-control" id="pwd">
							 </div>
							 <div class="form-group"> 
								<label for="pwd">Observacion:</label> </br>
							 <textarea name="observacion" rows="5" cols="50" id="pwd" >'.$fila['observacion'].'</textarea>
							 </div>
				
				<input type="hidden" name="codigo1" value="'.$codigo.'">
			
					
				<input class="btn btn-success" type="submit" value="Modificar Monitor">
					<a href="vermonitores.php" class="btn btn-danger">volver</a>
				
	
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>
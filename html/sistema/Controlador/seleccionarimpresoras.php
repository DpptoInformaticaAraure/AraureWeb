<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarImpresora($codigo);
			foreach ($filas as $fila) {
				echo '
				<h2>IMPRESORA</h2>
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
				<input type="text" name="marca" value="'.$fila['marca'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Enciende:</label>
				<input type="text" name="enciende" value="'.$fila['enciende'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Cable Corriente:</label>
				<input type="text" name="cable_c" value="'.$fila['cable_c'].'" disabled class="form-control" id="pwd">
			</div>
			<div class="form-group">
				<label for="pwd">Cable usb:</label>
				<input type="text" name="cable_vga" value="'.$fila['cable_usb'].'" disabled class="form-control" id="pwd">
			</div>
			<div class="form-group">
			<label for="pwd">Toner:</label>
			<input type="text" name="toner" value="'.$fila['toner'].'" disabled class="form-control" id="pwd">
		</div>
				<div class="form-group">
				<label for="pwd">Falla:</label>
				<input type="text" name="falla" value="'.$fila['falla'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Traido:</label>
				<input type="text" name="traido" value="'.$fila['traido'].'" disabled class="form-control" id="pwd">
				</div>    
				<div class="form-group">
				<label for="pwd">Recibido:</label>
				<input type="text" name="recibido" value="'.$fila['recibido'].'" disabled class="form-control" id="pwd">
				</div>    
				   <div class="form-group">
				<label for="pwd">Reparado:</label>
				<input type="text" name="reparado" value="'.$fila['reparado'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Entregado:</label>
				<input type="text" name="entregado" value="'.$fila['entregado'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Entrada:</label>
				<input type="date" name="entrada" value="'.$fila['entrada'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group">
				<label for="pwd">Salida:</label>
				<input type="date" name="salida" value="'.$fila['salida'].'" disabled class="form-control" id="pwd">
				</div>
				<div class="form-group"> 
				   <label for="pwd">Observacion:</label> </br>
				<textarea name="observacion" disabled rows="5" cols="50" id="pwd" >'.$fila['observacion'].'</textarea>
				</div>

              <a href="verimpresoras.php" class="btn btn-success">volver</a>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>
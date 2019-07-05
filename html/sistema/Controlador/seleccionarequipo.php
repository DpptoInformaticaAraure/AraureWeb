<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarEquipo($codigo);
			foreach ($filas as $fila) {
				echo '
				<div class="thumbnail">
				<br>
               <center>
             
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
      <label for="pwd">Sistema:</label>
      <input type="text" name="sistema" value="'.$fila['sistema'].'" disabled class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Siap:</label>
      <input type="text" name="siap" value="'.$fila['siap'].'" disabled class="form-control" id="pwd">
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
              <table>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a href="verequipos.php" class="btn btn-success"</a>volver</td>
				</tr>
			
		</table>
                   
    
                </form>
                </center>
                </div>

			';
			}
			
		}
}

?>

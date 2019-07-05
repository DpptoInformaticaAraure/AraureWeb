<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarEquipo($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="../Controlador/modificarequipo.php" method="post"> 
			   <div class="form-group">
			     <label for="usr">Codigo:</label>
			     <input type="text"   name="codigo" value="'.$fila['codigo'].'" disabled class="form-control" id="usr">
			   </div>
			   <div class="form-group">
                 <label for="usr">Departamento:</label>
                 <input type="text"   name="departamento" value="'.$fila['departamento'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
				   <label for="usr">Tipo:</label>
				   <select name="tipo" class="form-control" id="usr">
                          <option value="'.$fila['tipo'].'" ><b>'.$fila['tipo'].'</b></option>
                          <option>escritorio</option>
                          <option>laptop</option>
                       </select>
			   </div>
			   <div class="form-group">
			   <label for="usr">Sistema:</label>
			   <select name="sistema"  class="form-control" id="usr">
                          <option value="'.$fila['sistema'].'" ><b>'.$fila['sistema'].'</b></option>
                          <option>canaima 5</option>
                          <option>canaima 4</option>
                          <option>debian 8</option>
                          <option>debian 9</option>
                          <option>ubuntu</option>
                          <option>xubuntu</option>
                          <option>windows xp</option>
                           <option>windows 7</option>
                          <option>windows 8</option>
                           <option>windows 10</option>  
                       </select>
			   </div>
			   <div class="form-group">
			   <label for="usr">Siap:</label>
			   <select name="siap"  class="form-control" id="usr">
                          <option value="'.$fila['siap'].'" ><b>'.$fila['siap'].'</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>
			   </div>			   
			   <div class="form-group">
			   <label for="usr">Falla:</label>
			   <input type="text" name="falla" value="'.$fila['falla'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
			   <label for="usr">Traido:</label>
			   <input type="text" name="traido" value="'.$fila['traido'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
			   <label for="usr">Recibido:</label>
			   <input type="text" name="recibido" value="'.$fila['recibido'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
			   <label for="usr">Reparado:</label>
			   <input type="text" name="reparado" value="'.$fila['reparado'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
			   <label for="usr">Entregado:</label>
			   <input type="text" name="entregado" value="'.$fila['entregado'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group">
			   <label for="usr">Entrada:</label>
			   <input type="date" name="entrada" value="'.$fila['entrada'].'" class="form-control" id="usr">
			   </div>
           
			   <div class="form-group">
			   <label for="usr">Salida:</label>
			   <input type="date" name="salida" value="'.$fila['salida'].'" class="form-control" id="usr">
			   </div>
			   <div class="form-group"> 
			   <label for="pwd">Observacion:</label> </br>
			  <textarea name="observacion" rows="5" cols="50" id="pwd" >'.$fila['observacion'].'</textarea>
			  </div>


                 <table>

				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="btn btn-success" type="submit" value="Modificar Equipo">
					<a href="verequipos.php" class="btn btn-danger"</a>volver</td>
				</tr>
		</table>


    
                </form>
                </center>

			';
			}
			
		}
}

?>

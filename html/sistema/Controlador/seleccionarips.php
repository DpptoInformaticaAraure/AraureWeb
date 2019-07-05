<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarIp($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
			   <form action="../Controlador/modificarip.php" method="post"> 
			   
			   <div class="form-group">
			   <label for="usr">Ip:</label>
			   <input type="text"   name="ip" value="'.$fila['ip'].'" class="form-control" id="usr">
			 </div>
			 <div class="form-group">
			   <label for="usr">Departamento:</label>
			   <input type="text"   name="departamento" value="'.$fila['departamento'].'" class="form-control" id="usr">
			 </div>
			 <div class="form-group">
			 <label for="usr">Equipo:</label>
			 <input type="text"   name="equipo" value="'.$fila['equipo'].'" class="form-control" id="usr">
		   </div>
			 <div class="form-group">
			 <label for="usr">Sistema:</label>
			 <select name="sistema"  class="form-control" id="usr"><b>'.$fila['sistema'].'</b>
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
			 <select name="siap"  class="form-control" id="usr"><b>'.$fila['siap'].'</b>
						<option value="'.$fila['siap'].'" ><b>'.$fila['siap'].'</b></option>
						<option>si</option>
						<option>no</option>
					 </select>
			 </div>			   
			 <div class="form-group">
			 <label for="usr">Usuario:</label>
			 <input type="text" name="usuario" value="'.$fila['usuario'].'" class="form-control" id="usr">
			 </div>
			 <div class="form-group">
			 <label for="usr">Clave:</label>
			 <input type="text" name="clave" value="'.$fila['clave'].'" class="form-control" id="usr">
			 </div>
			 <div class="form-group">
			 <label for="usr">Clave root:</label>
			 <input type="text" name="observacion" value="'.$fila['observacion'].'" class="form-control" id="usr">
			 </div>

                 <table>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="btn btn-success" type="submit" value="Modificar IP">
					<a href="ips.php" class="btn btn-danger"</a>volver</td>
				</tr>
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>

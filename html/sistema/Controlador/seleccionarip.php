<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarIp($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
							 <form action="" method="post"> 
							 <div class="form-group">
							 <label for="usr">Ip:</label>
							 <input type="text"   name="ip" pattern="[0-9_.]{1,13}" class="form-control" id="usr" value="'.$fila['ip'].'" disabled>
						 </div>
						 <div class="form-group">
							 <label for="usr">Departamento:</label>
							 <input type="text"   name="departamento"  class="form-control" id="usr" value="'.$fila['departamento'].'" disabled>
						 </div>
						 <div class="form-group">
							 <label for="usr">Equipo:</label>
							 <input type="text"   name="equipo"  class="form-control" id="usr" value='.$fila['equipo'].' disabled>
						 </div>
						 <div class="form-group">
						 <label for="usr">sistema:</label>
						 <input type="text"   name="equipo"  class="form-control" id="usr" value='.$fila['sistema'].' disabled>
					 </div>
					 <div class="form-group">
					 <label for="usr">Siap:</label>
					 <input type="text"   name="equipo"  class="form-control" id="usr" value='.$fila['siap'].' disabled>
				 </div>
					
						 <div class="form-group">
							 <label for="usr">Usuario:</label>
							 <input type="text"   name="usuario"  class="form-control" id="usr" value="'.$fila['usuario'].'" disabled>
						 </div>
						 <div class="form-group">
							 <label for="usr">Clave:</label>
							 <input type="text"   name="clave"  class="form-control" id="usr" value="'.$fila['clave'].'" disabled>
						 </div>
						 <div class="form-group">
							 <label for="usr">Clave Root:</label>
							 <input type="text"   name="observacion"  class="form-control" id="usr" value="'.$fila['observacion'].'"  disabled>
						 </div>

                 <table>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a href="ips.php" class="btn btn-success"</a>volver</td>
				</tr>
			
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>
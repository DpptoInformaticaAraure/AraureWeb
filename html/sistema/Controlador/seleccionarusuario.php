<?php

function seleccionarUsuario(){
		if (isset($_GET['id'])) {
			$consultas= new Consultar();
			$id = $_GET['id'];

			$filas = $consultas->cargarusuario($id);
			foreach ($filas as $fila) {
				echo '
               
               <form action="../Controlador/modificarusuario.php" method="post"> 
				
				 <div class="form-group">
			     <label for="usr">USUARIO:</label>
			     <input type="text"   name="user"  class="form-control" id="usr" value="'.$fila['users'].'"required>
         </div>
         <div class="form-group">
			     <label for="usr">CONTRASEÑA A:</label>
			     <input type="password"   name="passadmin"  class="form-control" id="usr" placeholder="ingrese la contraseña" required>
         </div>
         <div class="form-group">
			     <label for="usr">CONTRASEÑA B:</label>
			     <input type="password"   name="pass"  class="form-control" id="usr" placeholder="ingrese la contraseña" required>
         </div>


				<input type="hidden" name="id" value="'.$id.'">
			
			<input type="submit" class="btn btn-success" value="Modificar usuario">
	
    
                </form>

			';
			}
			
		}
}

?>
<?php
	session_start();
	if (!$_SESSION['users']) {
		header("Location:../index.html");
	}		
  ?> 	
<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">

    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" type="text/css" href="../estilos2.css">
 
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>
    <title>INFORMATICA</title>
</head>
<body>
      <div class="contenedor">

        <header class="header">
           <?php
                                         include("../include/menu5.php");
                                      ?>
                <a href="#" class="imagen">
                      <IMG src="../images/alcaldia1.png" width="130" height="76"  />
                </a> 
                <h1 class="hidden-xs">JEFATURA DE INFORMATICA</h1>
                                    
        </header>

                    
                
     
      <main class="contenido">
      <form action="../Controlador/insertarip.php" class="inline" method="POST" accept-charset="utf-8">
		
    <h2 style="text-align: center;" >REGISTRO DE IP</h2>
    
    <div class="form-group">
			     <label for="usr">Ip:</label>
			     <input type="text"   name="ip" pattern="[0-9_.]{1,13}" class="form-control" id="usr" placeholder="ingrese el ip" required>
         </div>
         <div class="form-group">
			     <label for="usr">Departamento:</label>
			     <input type="text"   name="departamento"  class="form-control" id="usr" placeholder="ingrese el departamento" required>
         </div>
         <div class="form-group">
			     <label for="usr">Equipo:</label>
			     <input type="text"   name="equipo"  class="form-control" id="usr" placeholder="ingrese el equipo" required>
         </div>
			   <div class="form-group">
			   <label for="usr">Sistema:</label>
			   <select name="sistema"  class="form-control" id="usr">
                          <option value="linuxMint" ><b>linuxMint</b></option>
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
                          <option value="siap" ><b>si</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>
         </div>
         <div class="form-group">
			     <label for="usr">Usuario:</label>
			     <input type="text"   name="usuario"  class="form-control" id="usr" placeholder="ingrese el usuario" required>
         </div>
         <div class="form-group">
			     <label for="usr">Clave:</label>
			     <input type="text"   name="clave"  class="form-control" id="usr" placeholder="ingrese la clave" required>
         </div>
         <div class="form-group">
			     <label for="usr">Clave Root:</label>
			     <input type="text"   name="observacion"  class="form-control" id="usr" placeholder="ingrese la clave root" required>
         </div>
				
			
			

		

					<input  class="btn btn-success" type="submit" value="registrar IP">
				

		
		
	
	</form>
      </main>
      <aside class="sidebar">
      <IMG src="../images/escudo.png" width="130" height="76"  />
      </aside>
      <div class="wridget-1">
      <h3 style="text-align:center">GNU</h3>	
	                 
      </div>
      <div class="wridget-2">
      <h3 style="text-align:center">LINUX</h3>
      </div>
    <footer  class="footer">
        <p style="color: red">&copy; Copyright INFOSYSTEM <br/><br/></p>
    </footer>
</div>
<script src="reloj.js"></script>
</body>
</html>

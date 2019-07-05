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
 
<!--<style type="text/css">
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
</style>-->
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
      <form action="../Controlador/insertar.php" class="inline" method="POST" accept-charset="utf-8">
		
    <h2 style="text-align: center;">REGISTRO DE EQUIPO</h2>
    
			   <div class="form-group">
                 <label for="usr">Departamento:</label>
                 <input type="text"   name="departamento" class="form-control" id="usr" placeholder="ingrese el departamento" required>
			   </div>
			   <div class="form-group">
				   <label for="usr">Tipo:</label>
				   <select name="tipo" class="form-control" id="usr">
                          <option value="escritorio" ><b>escritorio</b></option>
                          <option>escritorio</option>
                          <option>laptop</option>
                       </select>
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
			   <label for="usr">Falla:</label>
			   <input type="text" name="falla"  class="form-control" id="usr" placeholder="ingrese la falla" required>
			   </div>
			   <div class="form-group">
			   <label for="usr">Traido:</label>
			   <input type="text" name="traido"  class="form-control" id="usr" placeholder="traido por:" required>
			   </div>
			   <div class="form-group">
			   <label for="usr">Recibido:</label>
			   <input type="text" name="recibido"  class="form-control" id="usr" placeholder="recibido por:" required>
			   </div>
			   <div class="form-group">
			   <label for="usr">Reparado:</label>
			   <input type="text" name="reparado"  class="form-control" id="usr" placeholder="reparado por:">
			   </div>
			   <div class="form-group">
			   <label for="usr">Entregado:</label>
			   <input type="text" name="entregado"  class="form-control" id="usr" placeholder="entregado por:">
			   </div>
			   <div class="form-group">
			   <label for="usr">Entrada:</label>
			   <input type="date" name="entrada"  class="form-control" id="usr" required>
			   </div>
           
			   <div class="form-group">
			   <label for="usr">Salida:</label>
			   <input type="date" name="salida"  class="form-control" id="usr">
			   </div>
			   <div class="form-group"> 
			   <label for="pwd">Observacion:</label> </br>
			  <textarea name="observacion" rows="5" cols="50" id="pwd" ></textarea>
			  </div>

					<input class="btn btn-success" type="submit" value="registrar equipo">

		
		
	
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

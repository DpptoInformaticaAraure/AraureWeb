<?php

session_start();
if (!$_SESSION["users"]) {
	header("location:index.php");
}
?>

<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/seleccionar.php");
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <title>informatica</title>
</head>
<body style="background-color:#FFF">
<div class="container">
  <br>
  <div class="thumbnail">                                                        
                                       
                                 <?php
                                    include("../include/cabecera.php");
                                  ?>
                                    
    </div>
    <hr>
    <div class="thumbnail">
                                   <?php
                                      include("../include/menu5.php");
                                   ?>
    </div>
    <hr>
    <div class="thumbnail">
	<h1 style="text-align: center;">MODIFICAR DATOS DE EQUIPO</h1>
</div>
<hr>
    <div class="thumbnail">
      <br>
	<?php

        seleccionar();

     ?>
   </div>
   <hr>
        <div class="thumbnail">
                 <footer class="footer">
                        <center>
                            <p style="color: red">&copy; Copyright INFOSYSTEM </p>
                        </center>
                 </footer>
     </div>
     </div>
     <br>
</body>
</html>
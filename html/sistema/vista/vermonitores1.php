<?php
session_start();
if (!$_SESSION["users"]) {
	header("location:../index.php");
}
?>	
<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/cargarmonitores.php");
?>

<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
    <h1 style="text-align: center;">MONITORES REGISTRADOS</h1> 
  </div>
    <hr>

	 <div class="thumbnail">

		<form method="get">
           
           <input type="text" name="buscar" placeholder="INGRESE EL CODIGO:">
           <input class="btn btn-danger" type="submit" value="BUSCAR">
           <a class="btn btn-info" href="vermonitores.php">TODAS</a>
		</form>
		
	</div>
  <hr>

  <div class="thumbnail">
<a class="btn btn-success" href="../pdf/consultarmonitores.php">generar reporte</a>
</div>
<hr>
 <div class="thumbnail">

	<?php

	if (isset($_GET['buscar'])) {
	    buscar($_GET['buscar']);
	}else{

		cargar();
	}
	
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
<hr>
</div>
<br>

</body>
</html>

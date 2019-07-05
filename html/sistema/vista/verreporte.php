<?php
session_start();
if (!$_SESSION["users"]) {
	header("location:../index.php");
}
?>	
<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/cargarreporte.php");
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

		 <header class="header">
           
              <?php
                     include("../include/cabecera.php");
                 ?>
          
      </header>

       <?php
//  include("../include/carrusel.php");
              ?>

              <?php
                        include("../include/menu5.php");
                    ?>
                    
<br><br> <h1>reportes</h1> 

	<div>

		<form method="get">
           
           <input type="text" name="buscar" pattern="[0-9_-]{1,13}"  placeholder="INGRESE LA FECHA:">
           <input class="btn btn-danger" type="submit" value="BUSCAR">
           <a class="btn btn-info" href="verreporte.php">TODAS</a>
    </form>
		
	</div>

    <div>
<a class="btn btn-success" href="../pdf/consultaips.php">generar reporte</a>

</div>
<br>

	<?php

	if (isset($_GET['buscar'])) {
	    buscar($_GET['buscar']);
	
	}
  else{

cargar();

  }
	
	?>




</div>
</body>
</html>
<?php
session_start();
if (!$_SESSION["users"]) {
	header("location:index.php");
}
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
                        include("../include/menu5.php");
                    ?>
                    


	<div class ="container">
		
		


	<form action="../Controlador/insertarreporte.php" class="inline" method="POST" accept-charset="utf-8">
		<br><br>
		
		<h1>REPORTE DIARIO</h1>
		<br>

		<center>
				
				<p>
					<input type="date"   name="fecha" placeholder="fecha: " required>
					
				</p>
                <p>
					<textarea name="reporte" rows="20" cols="50" ></textarea>
				</p>

					
					&nbsp;
					<input class="btn btn-success" type="submit" value="guardar reporte">

		</center>
		
	
	</form>
	</div>
	</div>
</body>
</html>

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

	<form action="../Controlador/insertarrepositorios.php" class="inline" method="POST" accept-charset="utf-8">
		
		
		<h1 align="center">REPOSITORIOS</h1>
 </div>
    <hr>
        <div class="thumbnail">

        	<br>

		<center>
				
				<p>
					<input type="text"   name="nombre" placeholder="nombre " required>
					
				</p>
                <p required>
					<textarea name="repositorios" rows="30" cols="100" ></textarea>
				</p>

					
					&nbsp;
					<input class="btn btn-success" type="submit" value="guardar repositorios">

		</center>
		
	
	</form>
	</div>
<hr>
      <div class="thumbnail">
                 <footer class="footer">
                        <center>
                          	<p style="color: red">&copy; Copyright INFOSYSTEM </p>
                        </center>
                 </footer>
     </div>
<br>
	
	</div>
</body>
</html>

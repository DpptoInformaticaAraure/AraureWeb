<?php

session_start();
if (!$_SESSION["users"]) {
	header("location:index.php");
}
?>

<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/usuariosregistrados.php");
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

	<form action="../Controlador/controlusuarios.php" method="post" accept-charset="utf-8">
		<h2 style="text-align: center;">REGISTRAR USUARIO</h2>
	</div>
	<hr>
	<div class="thumbnail">
	   <center>
		<table style="text-align: center;" border="0" align ="center" valign="middle">
				<tr>
					<td><span class="label label-info" style="font-size: 14pt ">USUARIO:</span></td>
					<td><input type="text" name="user"></td>
				</tr>
					<tr>
					<td><span class="label label-info" style="font-size: 14pt ">CONTRASEÑA A:</span></td>
					<td><input type="password" name="passadmin"></td>
				</tr>
				<tr>
					<td><span class="label label-info" style="font-size: 14pt ">CONTRASEÑA B:</span></td>
					<td><input type="password" name="pass"></td>
				</tr>

					
				<tr>
					<td>&nbsp;</td>
					
					<td><input class="btn btn-success" type="submit" value="Registrar Usuario"></td>

				</tr>
			
		</table>
		</center>
		<br>
	</div>
	<hr>
	<div class="thumbnail">
		<h2 style="text-align: center;">USUARIOS REGISTRADOS</h2>
	</div>
	<hr>
	<div class="thumbnail">

<?php

usuarios();

?>
	
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
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="estilos2.css">

		  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="images/INFOSYSTEM.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<title>informatica</title>
</head>
<body data-offset="40" background="images/7.jpg" >

		<div class="wrap">
	<div class="widget">
		<div class="fecha">
			<p id="diaSemana" class="diaSemana"></p>
			<p id="dia" class="dia"></p>
			<p>de</p>
			<p id="mes" class="mes"></p>
			<p>del</p>
			<p id="year" class="year"></p>

		</div>

		<div class="reloj">
			<p id="horas" class="horas"></p>
			<p>:</p>
			<p id="minutos" class="minutos"></p>
			<p>:</p>
			<div class="caja-segundos">
				<p id="ampm" class="ampm"></p>
				<p id="segundos" class="segundos"></p>
				
				
			</div>
		</div>
	</div>
</div>
	
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">

	<center><div class="tit" >
			<center><div class="tit">
		<center><div class="Ingreso">


			

	
  <!--<img src="images/12.png" class="img-responsive img-rounded">-->

<br>
<br>
<span class="label label-info " ><h1><i style="color:">JEFATURA DE INFORMATICA </i><i style="color:#B52C35"> <br>ALCALDIA DE ARAURE	</i></h1></span>
<br>
<br>

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		  <table border="0">

		     <tr>

		          <td></td>
			      <td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="user" placeholder='introduzca el usuario' required></td>
		      </tr>
		      <tr>
		      	  <td></td>
		          <td witdh=80><input style="border-radius:15px;" type="password" name="pass" placeholder='introduzca la contraseña' required></td>
	          </tr>
	          <tr>
		          <td></td>
		          <td width=80 align=center><input style="border-radius:15px;" class="btn btn-primary" type="submit" value="Aceptar"></td>
	          </tr>
	     
		   </table>
		</form>
		
		</div>

		</div>
	
<script src="reloj.js"></script>



<footer>

<p style="color: red">&copy; Copyright INFOSYSTEM <br/><br/></p>
 </footer>


</body>
</html>
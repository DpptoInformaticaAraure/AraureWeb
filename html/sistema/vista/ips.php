<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/cargarips.php");
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
    <title>INFORMATICA</title>
</head>
<body>
    <br>
<form method="get"> 
<input type="text" name="buscar" pattern="[0-9_.]{1,13}"  placeholder="INGRESE LA IP:">
<input class="btn btn-danger" type="submit" value="BUSCAR">
<a class="btn btn-info" href="ips.php">TODAS</a>
</form>
<form method="get">
           <select name="siap">
               <option value="si" ><b>SISTEMA OPENSIAP:</b></option>
               <option>si</option>
               <option>no</option>
            </select>
<input class="btn btn-danger" type="submit" value="BUSCAR">
<a class="btn btn-info" href="ips.php">TODAS</a>
</form>


<?php
if (isset($_GET['buscar'])) {
    buscar($_GET['buscar']);
}elseif(isset($_GET['siap'])){

    siap($_GET['siap']);
}
else{

cargar();

}

?>
</body>
</html>
<?php
	session_start();
	if (!$_SESSION['users']) {
		header("Location:../index.html");
	}	
	?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">-->
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

      <h4>Decreto 3.390 °</h4> 
					                            <p>
                                                  La Administración Pública Nacional empleará prioritariamente Software Libre desarrollado con Estándares Abiertos, en sus sistemas, proyectos y servicios informáticos. A tales fines, todos los órganos y entes de la Administración Pública Nacional iniciarán los procesos de migración gradual y progresiva de éstos hacia el Software Libre desarrollado con Estándares Abiertos.
                                               </p>
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

<!DOCTYPE html>

	<?php
	session_start();
	if (!$_SESSION['users']) {
		header("Location:../index.php");
	
	}	
	
	?>

<html lang="es">
  <head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

		  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="../images/INFOSYSTEM.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<title>informatica</title>
  </head>
<body  data-offset="40" style="background-color:#FFF">
 <div  class="container">
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
                             
                      <div class="row" style="text-align:center">

                      	<div class="span12">

                                         <h4>Decreto 3.390 °</h4> 
					                            <p>
                                                  La Administración Pública Nacional empleará prioritariamente Software Libre desarrollado con Estándares Abiertos, en sus sistemas, proyectos y servicios informáticos. A tales fines, todos los órganos y entes de la Administración Pública Nacional iniciarán los procesos de migración gradual y progresiva de éstos hacia el Software Libre desarrollado con Estándares Abiertos.
                                               </p>
                        </div>
                      </div>
      </div>
      <hr>
      <div class="thumbnail"><center><h3>SOFTWARE LIBRE</h3></center></div>
      <hr>
     
           <div class="row">
	            <div class="span4">
	            	<div class="thumbnail">
	                     <h3 style="text-align:center">LINUX</h3>	
	                     <img src="../images/1.jpeg" alt="#"/>
	                </div> 
	            </div>
	            <div class="span4">
	            	<div class="thumbnail">
	                         <h3 style="text-align:center">LIBRE</h3>	
	                         <img src="../images/indice.jpeg" />
	                </div>
	            </div>
	            <div class="span4">
	                  <div class="thumbnail">
	                            <h3 style="text-align:center">LINUX</h3>	
	                            <img src="../images/9.jpeg"/>
	                 </div>
	            </div>
           
       </div>
       <hr/>
      
             <div class="row">
        	        <div class="span6">
	                    <div class="thumbnail">
		                       <h3>GNU</h3>
	                    </div>
	                </div>
	                <div class="span6">
	                      <div class="thumbnail">
	                 	        <h3> LINUX</h3>
             	          </div>
	                </div>	
        
           </div>
                               <!-- Footer================================================== -->

      <hr>
      <div class="thumbnail">
                 <footer class="footer">
                        <center>
                          	<p style="color: red">&copy; Copyright INFOSYSTEM </p>
                        </center>
                 </footer>
     </div>
   </div><!-- /container -->
   <br>

   </body>
</html>
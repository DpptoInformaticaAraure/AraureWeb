<!DOCTYPE html>
<html>
<head>

</head>

<body>

<style>
	
        ul{
            float: left;
            list-style-type: none;
            padding: 0; 
            /* AÑADIMOS */
            position: relative; 
            left: 50%;
        }
        li{
            float: left;
            /* AÑADIMOS */
            position: relative; 
            right: 50%;
        }
</style>

     <div id="header">

           <ul class="nav">
            
            	
		           <li><a href="inicio.php" >Inicio</a></li>
		           <li><a href="verequipos.php" >Equipos</a>
		               <ul>    
		               	        <li><a href="verequipos.php" >Consultar Equipo</a></li>
		                        <li><a href="insertar.php" >Registrar Equipos</a></li>
		                        
		               </ul>
		           </li>
		         
		           <li><a href="vermonitores.php" > Monitores </a>
		               <ul>  
		               	     <li><a href="vermonitores.php" >Consultar Monitores </a></li>
		                     <li><a href="insertarmonitor.php" >Registrar Monitor </a></li>
		                     	       
                       </ul>
                   </li>
		           
		           <li><a href="verimpresoras.php" > Impresoras </a>
		                <ul>
		                     
                             <li><a href="verimpresoras.php" >Consultar impresoras </a></li>  
		                     <li><a href="insertarimpresora.php" >Registrar impresora </a></li>
		                          
                       </ul>
                   </li>
		 	       <li><a href="verips.php" > IP </a>
		                <ul>
		                	 <li><a href="verips.php" >Consultar IP </a></li>  
		                     <li><a href="insertarip.php" >Registrar IP </a></li>
		                          
                       </ul>
                   </li>
		            <li><a href="verrepositorios.php" > Repositorios </a>
		                <ul>
		                	 <li><a href="verrepositorios.php" >Ver Repositorios </a></li>  
		                     <li><a href="insertarrepositorios.php" > Insertar Repositorios </a></li>
		                          
                               </ul>
                            </li>

       

		            <!--  <li><a href="buscar.php" >Buscar</a></li>  -->
		            <li><a href="../resp.php">Backup</a></li>	
			       <li><a href="usuarios.php" >Usuarios</a></li>  
			         <li><a href="#" ><strong><B style="color: red"><?php echo $_SESSION["user"];?></B></strong> </a></li>  
			       <li><a href="../salir.php" ><i style="color: red">Cerrar Sesion</i></a></li>    
            </ul>
       </div>
   

       <br><br>
       
 </body>
 </html >


        
				
			 
           
                     	
                   

      

 

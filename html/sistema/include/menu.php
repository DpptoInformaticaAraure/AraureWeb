<!DOCTYPE html>


<style="text/css"
</style>
<center> <div class="container">
         <div class="btn-group btn-group-justified">
            
            	
		           <a href="inicio.php" class="btn btn-info">Inicio</a>
		           <a href="insertar.php" class="btn btn-info">Registrar vivienda</a>
		           <a href="verviviendas.php" class="btn btn-info">Viviendas</a>
		           <a href="insertarjefe.php" class="btn btn-info">Registrar Jefe </a>
		           <a href="verjefe.php" class="btn btn-info"> Ver Jefes </a>
		           <a href="insertargrupo.php" class="btn btn-info"> Miembros</a>
		 	       <a href="vergrupo.php" class="btn btn-info">Ver Miembros</a>
		 	         <a href="buscar.php" class="btn btn-info">Buscar</a>
			       <a href="usuarios.php" class="btn btn-info">Usuarios</a>  
			      
			       
         </div>
    </div>
</center>
                
                           <div class="dropdown">

			                      <button class="btn btn-info dropdown-toggle" type="button" id="dropdownmenu2" data-toggle="dropdown" aria-extended="true">
			                             	atencion espesial
			                            	<span class="caret"></span>
			                      </button>
	                         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownmenu2">
			                      <li role="presentation">
				                      	<a href="../vista/cargaradultos.php" ><small>Adultos Mayores</small></a>
			                      </li>
		
		                         <li role="presentation">
				                	<a role="item"href="../vista/cargarmenores.php" ><small>Menores de Edad</small></a>
				                </li>
     
				                  <li role="presentation">
				                    	<a role="item" href="../vista/cargarembarazadas.php" ><small>Embarazadas</small></a>
				                  </li>
	                          </ul>
	                       
	                 </div>
	              

                           <div class="dropdown">

			                      <button class="btn btn-info dropdown-toggle" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-extended="true">
			                             	Constancias
			                            	<span class="caret"></span>
			                      </button>
	                         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownmenu1">
			                      <li role="presentation">
				                      	<a href="../pdf/constancia.php" ><small>carta de residencia</small></a>
			                      </li>
		
		                         <li role="presentation">
				                	<a role="item"href="../pdf/constanciadenoposeervivenda.php" ><small>no poseer vivienda</small></a>
				                </li>
     
				                  <li role="presentation">
				                    	<a role="item" href="../pdf/constancia_de_ocupacion.php" ><small>ocupacion</small></a>
				                  </li>
	                          </ul>
	                       
	                  </div>
	             


<br>
 <ul class="nav pull-right">
				     <li> <a href="" class="btn btn-info">Bienvenidos <strong><?php echo $_SESSION["user"];?></strong> </a></li>
			        <li>  <a href="../salir.php" class="btn btn-danger"> Cerrar Sesion </a></li>
			  	  </ul>
	

                     	
                   

      
 <br>

  
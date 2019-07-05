<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#FFC2A8">
  <br>
 <br>
  <div class="col-md-12">
                      <?php $h1 = "Constancia de no Poseer Vivienda";  
                              echo '<h1>'.$h1.'</h1>'
                        ?>
                </div>
  <div class="well well-well">
        <div class="row padding">
             


            
                 <div class="col-md-12"  >   

                      <form method="post" action="constancia_de_no_poseer_vivienda.php">                            
                        <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                       <p>
                        <span class="label label-default">CEDULA</span>                                  
                        <input type="number" min="1000000" max="400000000" name="cedu" placeholder="introduzca la cedula" required>
                        &nbsp;&nbsp;<span class="label label-default">DIAS</span>
                        <input type="number" min="1" max="31" name="dia" placeholder="introduzca el dia" required>   
                        &nbsp;&nbsp;<span class="label label-default">MES</span> 
                        <input type="text" name="mes" placeholder="introduzca el mes" required>
                        &nbsp;&nbsp;<span class="label label-default">AÑOS</span> 
                        <input type="number" min="1980" name="anos" placeholder="introduzca el año" required> 
                       </p>
                       <p>
                        &nbsp;&nbsp;<span class="label label-default">TRAMITES</span>
                        <input type="text" name="tramites" placeholder="introduzca el tramite" required>
                        &nbsp;&nbsp;<span class="label label-default">RESIDE</span>
                        <input type="number" min="1" name="reside" placeholder="introduzca en numero" required>
                        &nbsp;&nbsp;<span class="label label-default">RESIDE EN LETRAS</span>
                        <input type="text" name="reside2" placeholder="introduzca en letras" required>
                       
                      </p>
                      <p>
                        &nbsp;&nbsp;<span class="label label-default">DIRECCION</span>
                        <input type="text" name="direccion" placeholder="introduzca su direccion" required>

                         &nbsp;&nbsp;<span class="label label-default">EN CONDICION</span>
                        <input type="text" name="condicion" placeholder="introduzca la condicion" required>
                        </p>
                        <input type="hidden" name="create_pdf" >
                         <a href="../vista/inicio.php" class="btn btn-danger pull-left" > Volver</a>                            
                        <input type="submit"   class="btn btn-danger pull-right" value="Generar PDF">
                     </form>                 
                 </div>  
            
        </div>
   </div>

</body>
</html>
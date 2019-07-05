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

<body style="background-color:#FFF">
  <br>
 <br>
  <div class="col-md-12">
                      <?php $h1 = "reporte";  
                              echo '<h1>'.$h1.'</h1>'
                        ?>
                </div>
  <div class="well well-well">
        <div class="row padding">
             


            
                 <div class="col-md-12"  >   

                      <form method="post" action="index2.php">                            
                        <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                       <p>
                        <span class="label label-default">CEDULA</span>                                  
                        <input type="date"  name="fecha" placeholder="introduzca la fecha 2019-01-01" required>
      
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
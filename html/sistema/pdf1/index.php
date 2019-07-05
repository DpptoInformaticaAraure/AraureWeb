<?php 
	require_once('conexion/conexion.php');	
	$usuario = 'SELECT * FROM habitante ORDER BY cedula ASC';	
	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';

  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>cedula</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>vivienda</th>
            <th>estado civil</th>
            <th>hijos</th>
            <th>cuantos</th>
            <th>ocupacion</th>
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
  $content .= '
    <tr bgcolor="#f5f5f5">
            <td>'.$user['cedula'].'</td>
            <td>'.$user['nombres'].'</td>
            <td>'.$user['apellidos'].'</td>
            <td>'.$user['vivienda'].'</td>
            <td>'.$user['est_ci'].'</td>
            <td>'.$user['hijos'].'</td>
            <td>'.$user['cuantos'].'</td>
            <td>'.$user['ocup'].'</td>

        </tr>

          
  ';
  }
  
  $content .= '</table>';
  
  $content .= ' 
 <div class="row">
          <div class="col-md-12">
      
              <h1 style="text-align:center;">otros datos</h1>

      <table border="1" cellpadding="5" style="text-align:center;">
        <thead>
          <tr>
            <th>cedula</th>
            <th>carnet</th>
            <th>codigo</th>
            <th>observ</th>
        
          </tr>
        </thead>
  ';

    require_once('conexion/conexion.php');  
  $usuario = 'SELECT * FROM habitante ORDER BY cedula ASC';  
  $usuarios=$mysqli->query($usuario);
  
  
  while ($user2=$usuarios->fetch_assoc()) { 
  $content .= '
    <tr bgcolor="#f5f5f5">
            <td>'.$user2['cedula'].'</td>
            <td>'.$user2['car_pat'].'</td>
            <td>'.$user2['cod'].'</td>
            <td>'.$user2['obser'].'</td>
          

        </tr>

          
  ';
  }
  
  $content .= '</table>';

  $content .= ' 
  
      <div class="row padding">
          <div class="col-md-12" style="text-align:center;"><br><br><br><br>
              <span>Pdf Creator </span><a href="http://www.redecodifica.com">cesar ratia</a>
            </div>
        </div>

  ';
	
	
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}

?>
		 
          
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF - Miguel Angel Caro Rojas</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
            	<?php $h1 = "datos de habitante en pdf - julio 2017";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
 
              <div class="row">
      <table class="table table-hover" style="text-align:center;">
        <thead>
          <tr>
            <th><center>cedula</center></th>
            <th><center>nombres</center></th>
            <th><center>apellidos</center></th>
            <th><center>vivienda</center></th>
            <th><center>estado civil</center></th>
            <th><center>hijos</center></th>
            <th><center>cuantos</center></th>
            <th><center>ocupacion</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="">
            <td><?php echo $user['cedula']; ?></td>
            <td><?php echo $user['nombres']; ?></td>
            <td><?php echo $user['apellidos']; ?></td>
            <td><?php echo $user['vivienda']; ?></td>
            <td><?php echo $user['est_ci']; ?></td>
            <td><?php echo $user['hijos']; ?></td>
             <td><?php echo $user['cuantos']; ?></td>
            <td><?php echo $user['ocup']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>


 <?php  echo '<h1>'.'<p> otros datos</p>'.'</h1>' ?>

 <table class="table table-hover" style="text-align:center;">
        <thead>
          <tr>
            <th><center>cedula</center></th>
            <th><center>carnet</center></th>
            <th><center>codigo</center></th>
            <th><center>observacion</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 

   require_once('conexion/conexion.php');  
  $usuario = 'SELECT * FROM habitante ORDER BY cedula DESC';  
  $usuarios=$mysqli->query($usuario);

      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="">
            <td><?php echo $user['cedula']; ?></td>
            <td><?php echo $user['car_pat']; ?></td>
            <td><?php echo $user['cod']; ?></td>
            <td><?php echo $user['obser']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
      
    
              <div class="col-md-12">
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
        </div>
    </div>

</body>
</html>
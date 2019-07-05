<?php 
	require_once('conexion/conexion.php');	
	$usuario = 'SELECT * FROM ip ORDER BY ip ASC';	
	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(5, 5, 5, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage('L');

	$content = '';

  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5" bgcolor="">
        <thead >
          <tr bgcolor="#a2a5aa">
           
            <th WIDTH="30" HEIGHT="20"><B>IP</B></th>
            <th HEIGHT="20"><B>Dep</B></th>
            <th HEIGHT="20"><B>Equipo</B></th>
            <th HEIGHT="20"><B>Sistema</B></th>
            <th WIDTH="40" HEIGHT="20"><B>Siap</B></th>
            <th HEIGHT="20"><B>Usuario</B></th>
            <th HEIGHT="20"><B>Clave</B></th>

            <th WIDTH="90" HEIGHT="20"><B>Observacion</B></th>

          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
  $content .= '
    <tr bgcolor="">
           
            <td WIDTH="30">'.$user['ip'].'</td>
            <td>'.$user['departamento'].'</td>
            <td>'.$user['equipo'].'</td>
            <td>'.$user['sistema'].'</td>
            <td WIDTH="40">'.$user['siap'].'</td>
            <td>'.$user['usuario'].'</td>
            <td>'.$user['clave'].'</td>

            <td WIDTH="90">'.$user['observacion'].'</td>
        </tr>

          
  ';
  }
  
  $content .= '</table>';
  
 


	
	
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}

?>
		 
          
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF - informatica</title>
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
            	<?php $h1 = "Datos de los equipos con IP";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
 
              <div class="row">
      <table class="table table-hover" style="text-align:center;">
        <thead>
          <tr>
           
            <th WIDTH="5"><center>IP</center></th>
            <th><center>Departamento</center></th>
            <th><center>Equipo</center></th>
            <th><center>Sistema</center></th>
            <th><center>Siap</center></th>
            <th><center>Usuario</center></th>
            <th><center>Clave</center></th>
            <th><center>Observacion</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="">
            
            <td WIDTH="5"><?php echo $user['ip']; ?></td>
            <td><?php echo $user['departamento']; ?></td>
            <td><?php echo $user['equipo']; ?></td>
            <td><?php echo $user['sistema']; ?></td>
            <td><?php echo $user['siap']; ?></td>
            <td><?php echo $user['usuario']; ?></td>
            <td><?php echo $user['clave']; ?></td>
            <td><?php echo $user['observacion']; ?></td>
            
          </tr>
         <?php } ?>
        </tbody>
      </table>

      
    
              <div class="col-md-12">
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <a href="../vista/verips.php" class="btn btn-danger pull-left" > Volver</a>
                  <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
        </div>
    </div>

</body>
</html>
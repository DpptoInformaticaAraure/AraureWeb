<?php 
	require_once('conexion/conexion.php');	
	$usuario = 'SELECT * FROM monitores ORDER BY codigo ASC';	
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
           
            <th WIDTH="30" HEIGHT="20"><B>Cod</B></th>
            <th HEIGHT="20"><B>Dep</B></th>
            <th HEIGHT="20"><B>Tipo</B></th>
            <th HEIGHT="20"><B>Marca</B></th>
            <th HEIGHT="20"><B>Eciende</B></th>
            <th HEIGHT="20"><B>Cable</B></th>
            <th HEIGHT="20"><B>vga</B></th>
            <th HEIGHT="20"><B>Falla</B></th>
            <th HEIGHT="20"><B>Traido</B></th>
            <th HEIGHT="20"><B>Recibido</B></th>
            <th HEIGHT="20"><B>Reparado</B></th>
            <th WIDTH="60" HEIGHT="20"><B>Entregado</B></th>
            <th WIDTH="90" HEIGHT="20"><B>Observacion</B></th>

          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
  $content .= '
    <tr bgcolor="">
           
            <td WIDTH="30">'.$user['codigo'].'</td>
            <td>'.$user['departamento'].'</td>
            <td>'.$user['tipo'].'</td>
            <td>'.$user['marca'].'</td>
            <td>'.$user['enciende'].'</td>
            <td>'.$user['cable_c'].'</td>
            <td>'.$user['cable_vga'].'</td>
            <td>'.$user['falla'].'</td>
            <td>'.$user['traido'].'</td>
            <td>'.$user['recibido'].'</td>
            <td>'.$user['reparado'].'</td>
            <td WIDTH="60">'.$user['entregado'].'</td>
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
            	<?php $h1 = "Datos de los Monitores en pdf";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
 
              <div class="row">
      <table class="table table-hover" style="text-align:center;">
        <thead>
          <tr>
           
            <th WIDTH="5"><center>Codigo</center></th>
            <th><center>Departamento</center></th>
            <th><center>Tipo</center></th>
            <th><center>Marca</center></th>
            <th><center>Enciende</center></th>
            <th><center>Cable Corriente</center></th>
            <th><center>Cable vga</center></th>
            <th><center>Falla</center></th>
            <th><center>Traido por</center></th>
            <th><center>Recibido</center></th>
            <th><center>Reparado</center></th>
            <th><center>Entredado por</center></th>
            <th><center>Fecha Entrada</center></th>
            <th><center>Fecha Salida</center></th>
            <th><center>Observacion</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="">
            
            <td WIDTH="5"><?php echo $user['codigo']; ?></td>
            <td><?php echo $user['departamento']; ?></td>
            <td><?php echo $user['tipo']; ?></td>
            <td><?php echo $user['marca']; ?></td>
            <td><?php echo $user['enciende']; ?></td>
            <td><?php echo $user['cable_c']; ?></td>
            <td><?php echo $user['cable_vga']; ?></td>
            <td><?php echo $user['falla']; ?></td>
            <td><?php echo $user['traido']; ?></td>
            <td><?php echo $user['recibido']; ?></td>
            <td><?php echo $user['reparado']; ?></td>
            <td><?php echo $user['entregado']; ?></td>
            <td><?php echo $user['entrada']; ?></td>
            <td><?php echo $user['salida']; ?></td>
            <td><?php echo $user['observacion']; ?></td>
            
          </tr>
         <?php } ?>
        </tbody>
      </table>

      
    
              <div class="col-md-12">
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <a href="../vista/vermonitores.php" class="btn btn-danger pull-left" > Volver</a>
                  <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
        </div>
    </div>

</body>
</html>
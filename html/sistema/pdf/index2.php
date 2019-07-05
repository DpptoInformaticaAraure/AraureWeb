<?php   
 require_once('conexion/conexion.php'); 

	
if(isset($_POST['create_pdf'])){
  
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Mision sucre');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
   
   
   $id=$_POST['fecha'];

      print_r($id);

  require_once('conexion/conexion.php');
  

  $usuario = "SELECT * FROM  reporte where fecha= $id";

  if(isset($usuario)){ 

              $usuarios=mysqli_query($mysqli,$usuario);
              while ($user3=mysqli_fetch_assoc($usuarios)) {
              print_r($user3);

              if ($id==$user3['fecha']) {
                       $cedula=$user3['fecha'];
                       $reporte=$user3['reporte'];
                        
                    }
                    else
                    {

                       echo "error de fecha";
                          
                    }

      
                }

              }
      
  
  $content .= '
    
          
  ';
  
  
      
         
$content .='
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8" />
    <title>Costancia de Residencia</title>
    <style type="text/css">
      body { font-family:"Times New Roman"; font-size:12pt; margin-top: 0em;  }
      p { margin:0pt }
      .Header { font-size:12pt  }
      img { float:left  }
      .Footer { font-size:12pt }
      
    </style>
  </head>
  <body  >

       <header>
                  <img src="image002.jpg" width="100" height="60" >&nbsp;&nbsp;&nbsp;

                  <img src="repu.png" width="250" height="60" >
              
                  <img src="image001.jpg" width="100" height="80">
           
           
          </header>      
     
  
      <p>'.$cedula.'</p>
      <p>'.$reporte.'</p>
    
        
  </body>
 </html>';

	
	
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('costancia_de_residencia.pdf', 'I');
}

?>
		 
          
        

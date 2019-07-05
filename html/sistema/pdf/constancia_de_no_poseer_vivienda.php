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
   
   
   $id=$_POST['cedu'];
   $dia=$_POST['dia'];
   $mes=$_POST['mes'];
   $anos=$_POST['anos'];
   $tramites=$_POST['tramites'];
   $reside=$_POST['reside'];
   $resid=$_POST['reside2'];
   $direccion=$_POST['direccion'];
   $condicion=$_POST['condicion'];
     
  require_once('conexion/conexion.php');
  

  $usuario = "SELECT * FROM  jefes_familia where cedula= $id";
  if(isset($usuario)){ 

              $usuarios=mysqli_query($mysqli,$usuario);
              while ($user3=mysqli_fetch_assoc($usuarios)) {
              

              if ($id==$user3['cedula']) {
                       $cedula=$user3['cedula'];
                       $nacionalidad=$user3['nacionalidad'];
                       $nombre=$user3['nombres'];
                       $apellido=$user3['apellidos'];
                     

                    }
                    else
                    {

                       echo "error de cedula";
                          
                    }

      
                }
      
                
                        require_once('conexion/conexion.php');
 

  $usuario1 = "SELECT * FROM  grupo_familiar where cedula_miembro = $id"; 
 $usuarios2=mysqli_query($mysqli,$usuario1);
              while ($user4=mysqli_fetch_assoc($usuarios2)) {
              
                    if ($id==$user4['cedula_miembro']) {
                      
                

                       $cedula=$user4['cedula_miembro'];
                       $nacionalidad=$user4['nacionalidad_miembro'];
                       $nombre=$user4['nombres_miembro'];
                       $apellido=$user4['apellidos_miembro'];
                     
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
      .Footer { font-size:12pt }
      .BalloonText { font-family:Tahoma; font-size:8pt }
      span.EncabezadoCar { font-size:12pt }
      span.PiedepginaCar { font-size:12pt }
    </style>
  </head>
  <body  >
       <header >
            
            <img src="constancia2.jpg" width="100" height="60" alt="" >
              
            
             <img src="constancia1.jpg" width="300" height="60" alt=""  />
           
           
          </header>
   
      
      <p style="text-align:center">
        <strong><span style="font-family:Arial; ">CONSTANCIA DE NO POSEER VIVIENDA</span></strong>
      </p>
    
      <p style="text-indent:35.4pt; text-align:justify; line-height:200%; font-size:12pt">
Nosotros los abajo firmantes, integrantes de la Junta Directiva del Consejo Comunal “La Nueva Victoria”; por medio del presente documento, hacemos constar que el / la ciudadano (a): '.$nombre.' '.$apellido.', venezolano (a), mayor de edad, titular de la cédula de identidad No: '.$nacionalidad.'-'.$cedula.' <b>NO POSEE VIVIENDA PROPIA</b> y que  reside desde hace '.$resid.'('.$reside.') años en la siguiente dirección: '.$direccion.' <b>Acarigua – Edo -  Portuguesa;</b> en condición de: <b>'.$condicion.'</b>.

      </p>
     
      <p style="text-indent:35.4pt; text-align:justify; line-height:200%; font-size:12pt">
        <span style="font-family:Arial">Constancia que se expide de la parte  interesada  en Acarigua a los '.$dia.' días del mes de ' .$mes.' del  '.$anos.' .</span> </p>
     
      <p style="line-height:200%; font-size:12pt">
        <strong><span style="font-family:Arial; ">PARA TRÁMITE DE: '.$tramites.'</span></strong>
      </p>

    
      <p style="text-align:center; font-size:12pt">
        <strong><span style="font-family:Arial; ">Comité de Asuntos Civiles</span></strong>
      </p>
    
      
      <p style="text-align:center; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri">________________</span>
      <br>
        <strong><span style="font-family:Calibri; ">Maribel Mendoza</span></strong>
    <br>
       
        <strong><span style="font-family:Calibri; ">0416-8551309</span></strong>
    
      <br>
        <strong><span style="font-family:Calibri; ">Comité de Infraestructura</span></strong>
      </p>

    <br>
    <p style="text-align:left; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________</span>
      <br>
        <strong><span style="font-family:Calibri; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neliz Suarez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Juan Rodríguez</span></strong>
    <br>
       
        <strong><span style="font-family:Calibri; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0426-8141694&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0414-1571850</span></strong>
    
      <br>
        <strong><span style="font-family:Calibri; ">Unidad de Contraloría Social&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comité de Vivienda</span></strong>
      </p>
      
     
     
        <Footer>
               <p style="font-size:12pt; text-align:center">Calle principal, Urb. La Nueva Victoria, Acarigua-Edo-Portuguesa <br>
               Constancia Valida por 60 días </p>

        </<footer>
          
        
  </body>
</html>';

	
	
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('costancia_de_no_poseer_vivienda.pdf', 'I');
}

?>
		 
          
        

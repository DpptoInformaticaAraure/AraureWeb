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
     // print_r($id);

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
     
  

<P ALIGN="CENTER" STYLE="margin-bottom: 0.14in"><FONT SIZE=5><I><U><B>CONSTANCIA DE RESIDENCIA</B></U></I></FONT></FONT></P>
<P ALIGN="JUSTIFY" STYLE="margin-bottom: 0.14in">      <FONT SIZE=3>El
Consejo Comunal “La Ciudadela”, por medio de la presente hace    
         constar que el (la) ciudadano
(a): '.$nombre.' '.$apellido.', Titular de la cedula
de identidad N°: '.$nacionalidad.' '.$cedula.' Reside en esta
comunidad en la siguiente dirección: '.$direccion.'</FONT></P>

<P ALIGN="JUSTIFY" STYLE="margin-bottom: 0.14in"><FONT SIZE=3>Constancia que se
expide a los '.$dia.' días del mes de '.$mes.' Del
año '.$anos.' <br>
 <br> Con fines <br> '.$tramites.' .</FONT>
<P ALIGN="JUSTIFY" STYLE="margin-bottom: 0.14in"><FONT SIZE=3>Observación: <br>
   _____________________________________________________________________________________.</FONT></P>
   <br><br>

 <p style="text-align:center; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri">________________</span>
      <br>
        <strong><span style="font-family:Calibri; ">Oscar Ortega</span></strong>
    <br>
       
        <strong><span style="font-family:Calibri; ">C.I. 11.075.522</span></strong>
    
      <br>
        <strong><span style="font-family:Calibri; ">Asuntos Civiles</span></strong>
      </p>

    <br>
    <p style="text-align:left; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________</span>
      <br>
        <strong><span style="font-family:Calibri; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mirian Romero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yessica
        Perez</span></strong>
    <br>
       
        <strong><span style="font-family:Calibri; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.I. 7.543.756&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.I. 25.035.180</span></strong>
    
      <br>
        <strong><span style="font-family:Calibri; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vivienda y hábitat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contraloría Social</span></strong>
      </p>
      
    
        
  </body>
</html>';

	
	
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('costancia_de_residencia.pdf', 'I');
}

?>
		 
          
        

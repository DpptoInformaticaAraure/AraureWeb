<?php
$db_host = "localhost";
$db_name = "sistema";
$db_user = "root";
$db_pass = '';

$fecha = date("Y-m-d-H:i:s");

$salida_sql = $db_name.'_'.$fecha.'.sql';

$dump = "mysqldump -h $db_host -u$db_user -p$db_pass  $db_name  > $salida_sql";

system($dump, $output);

       echo '<script>alert("respaldado con exito")</script> ';
      echo "<script>location.href='/sistema/vista/inicio.php'</script>";

 ?>
<?php
class Consultar{

//bloque de usuarios
    public function insertarUsuario($arg_user, $arg_passadmin, $arg_pass){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into login (id, users, passadmin, pass) values (default, :user, :passadmin, :pass)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':user', $arg_user);
     $statement->bindParam(':passadmin', $arg_passadmin);
     $statement->bindParam(':pass', $arg_pass);
    
     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

    public function cargarUsuarios(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

    public function eliminarUsuario($arg_id){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from login where id = :id";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':id', $arg_id);
   if(!$statement) {
      return "error al eliminar usuario";
     } else {

             $statement->execute();
            return "usuario eliminado correctamente" ;     
         }

 }

 public function cargarUsuario($arg_id){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from login where id = :id";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":id", $arg_id);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

public function modificarUsuario($arg_campo, $arg_valor, $arg_id){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update login set $arg_campo = :valor where id = :id";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":id", $arg_id);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

//bloque de ip

public function insertarIp($arg_ip, $arg_departamento, $arg_equipo, $arg_sistema, $arg_siap, $arg_usuario, $arg_clave, $arg_observacion){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into ip (ip, departamento, equipo, sistema, siap, usuario, clave, observacion) values (:ip, :departamento, :equipo, :sistema, :siap, :usuario, :clave, :observacion)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':ip', $arg_ip);
     $statement->bindParam(':departamento', $arg_departamento);
     $statement->bindParam(':equipo', $arg_equipo);
     $statement->bindParam(':sistema', $arg_sistema);
     $statement->bindParam(':siap', $arg_siap);
     $statement->bindParam(':usuario', $arg_usuario);
     $statement->bindParam(':clave', $arg_clave);
     $statement->bindParam(':observacion', $arg_observacion);
    
     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }
public function modificarIp($arg_campo, $arg_valor, $arg_codigo){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update ip set $arg_campo = :valor where ip = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":codigo", $arg_codigo);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}
  public function cargarIps(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from ip";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

  public function cargarSiap(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from ip where siap = 'si'";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

    public function buscarSiap($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from ip where siap like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}


  public function cargarIp($arg_codigo){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from ip where ip = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo", $arg_codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

  public function buscarIp1($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from ip where ip like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

 public function eliminarIp($arg_codigo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from ip where ip = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':codigo', $arg_codigo);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

//bloque de reporte
 public function insertarReporte($arg_fecha, $arg_reporte){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into reporte (fecha, reporte) values (:fecha, :reporte)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':fecha', $arg_fecha);
     $statement->bindParam(':reporte', $arg_reporte);

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

    public function cargarReportes(){
  	$rows=null;
  	$modelo = new Conexion();
  	$conexion=$modelo->get_conexion();
  	$sql="select * from reporte";
  	$statement=$conexion->prepare($sql);
  	$statement->execute();
  	while ($result=$statement->fetch()) {
  		
  		$rows[]=$result;
  	}

  	return $rows;
  }

  public function buscarReporte1($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from reporte where fecha like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

//bloque de repositorios

 public function insertarRepositorios($arg_nombre, $arg_repositorios){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into repositorios (nombre, repositorios) values (:nombre, :repositorios)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':nombre', $arg_nombre);
     $statement->bindParam(':repositorios', $arg_repositorios);

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }

    public function cargarRepositorios(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from repositorios";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

  public function buscarRepositorio1($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from repositorios where nombre like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}


public function cargarRepositorio($arg_codigo){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from repositorios where id = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo", $arg_codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

public function modificarRepositorio($arg_campo, $arg_valor, $arg_codigo){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update repositorios set $arg_campo = :valor where id = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":codigo", $arg_codigo);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

 public function eliminarRepositorio($arg_codigo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from repositorios where id = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':codigo', $arg_codigo);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

 //bloque de equipos
	public function insertarEquipo($arg_departamento, $arg_tipo, $arg_sistema, $arg_siap, $arg_falla, $arg_traido, $arg_recibido, $arg_reparado, $arg_entregado, $arg_entrada, $arg_salida, $arg_observacion){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into equipos (departamento, tipo, sistema, siap, falla, traido, recibido, reparado, entregado, entrada, salida, observacion) values (:departamento, :tipo, :sistema, :siap, :falla, :traido, :recibido, :reparado, :entregado, :entrada, :salida, :observacion)";
     $statement=$conexion->prepare($sql);
    
     $statement->bindParam(':departamento', $arg_departamento);
     $statement->bindParam(':tipo', $arg_tipo);
     $statement->bindParam(':sistema', $arg_sistema);
     $statement->bindParam(':siap', $arg_siap);
     $statement->bindParam(':falla', $arg_falla);
     $statement->bindParam(':traido', $arg_traido);
     $statement->bindParam(':recibido', $arg_recibido);
     $statement->bindParam(':reparado', $arg_reparado);
     $statement->bindParam(':entregado', $arg_entregado);
     $statement->bindParam(':entrada', $arg_entrada);
     $statement->bindParam(':salida', $arg_salida);
     $statement->bindParam(':observacion', $arg_observacion);
    
     if (!$statement) {
     	return "error al crear registro";

     }
     else

      {
         $statement->execute();

     	return "registro creado correctamente";
       }
	}

  

  public function cargarEquipos(){
  	$rows=null;
  	$modelo = new Conexion();
  	$conexion=$modelo->get_conexion();
  	$sql="select * from equipos where codigo = codigo";
  	$statement=$conexion->prepare($sql);
  	$statement->execute();
  	while ($result=$statement->fetch()) {
  		
  		$rows[]=$result;
  	}

  	return $rows;
  }

   public function eliminarEquipo($arg_codigo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from equipos where codigo = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':codigo', $arg_codigo);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

public function buscarEquipo1($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from equipos where codigo like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}


public function cargarEquipo($arg_codigo){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from equipos where codigo = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo", $arg_codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}

public function modificarEquipo($arg_campo, $arg_valor, $arg_codigo){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update equipos set $arg_campo = :valor where codigo = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":codigo", $arg_codigo);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

//bloque de monitores

   

   public function cargarMonitores(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from monitores";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

public function cargarMonitor($arg_codigo){
  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from monitores where codigo = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo", $arg_codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

}
  public function buscarMonitor($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from monitores where codigo like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}

 public function eliminarMonitor($arg_codigo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from monitores where codigo = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':codigo', $arg_codigo);
   if(!$statement) {
      return "Error al eliminar Registro";
     } else {

             $statement->execute();
            return "
            Registro eliminado correctamente" ;     
         }

 }


public function modificarMonitor($arg_campo, $arg_valor, $arg_codigo){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update monitores set $arg_campo = :valor where codigo = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":codigo", $arg_codigo);
    if (!$statement) {

        return "error al modificar monitor ";

      }else{

        $statement->execute();
        return "monitor modificado correctamente";
    }

   
}

public function insertarMonitor($arg_departamento, $arg_tipo, $arg_marca, $arg_enciende, $arg_cable_c, $arg_cable_vga, $arg_falla, $arg_traido, $arg_recibido, $arg_reparado, $arg_entregado, $arg_entrada, $arg_salida, $arg_observacion){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into monitores (departamento, tipo, marca, enciende, cable_c, cable_vga, falla, traido, recibido, reparado, entregado, entrada, salida, observacion) values (:departamento, :tipo, :marca, :enciende, :cable_c, :cable_vga, :falla, :traido, :recibido, :reparado, :entregado, :entrada, :salida, :observacion)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':departamento', $arg_departamento);
     $statement->bindParam(':tipo', $arg_tipo);
     $statement->bindParam(':marca', $arg_marca);
     $statement->bindParam(':enciende', $arg_enciende);
     $statement->bindParam(':cable_c', $arg_cable_c);
     $statement->bindParam(':cable_vga', $arg_cable_vga);
     $statement->bindParam(':falla', $arg_falla);
     $statement->bindParam(':traido', $arg_traido);
     $statement->bindParam(':recibido', $arg_recibido);
     $statement->bindParam(':reparado', $arg_reparado);
     $statement->bindParam(':entregado', $arg_entregado);
     $statement->bindParam(':entrada', $arg_entrada);
     $statement->bindParam(':salida', $arg_salida);
     $statement->bindParam(':observacion', $arg_observacion);
     

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }
public function insertarMonitor2($arg_codigo, $arg_departamento, $arg_tipo, $arg_marca, $arg_enciende, $arg_cable_c, $arg_cable_vga, $arg_falla, $arg_traido, $arg_recibido, $arg_reparado, $arg_entregado, $arg_entrada, $arg_salida, $arg_observacion){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into monitores (codigo, departamento, tipo, marca, enciende, cable_c, cable_vga, falla, traido, recibido, reparado, entregado, entrada, salida, observacion) values (:codigo, :departamento, :tipo, :marca, :enciende, :cable_c, :cable_vga, :falla, :traido, :recibido, :reparado, :entregado, :entrada, :salida, :observacion)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':codigo', $arg_codigo);
     $statement->bindParam(':departamento', $arg_departamento);
     $statement->bindParam(':tipo', $arg_tipo);
     $statement->bindParam(':marca', $arg_marca);
     $statement->bindParam(':enciende', $arg_enciende);
     $statement->bindParam(':cable_c', $arg_cable_c);
     $statement->bindParam(':cable_vga', $arg_cable_vga);
     $statement->bindParam(':falla', $arg_falla);
     $statement->bindParam(':traido', $arg_traido);
     $statement->bindParam(':recibido', $arg_recibido);
     $statement->bindParam(':reparado', $arg_reparado);
     $statement->bindParam(':entregado', $arg_entregado);
     $statement->bindParam(':entrada', $arg_entrada);
     $statement->bindParam(':salida', $arg_salida);
     $statement->bindParam(':observacion', $arg_observacion);
     

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }



 
 //bloque de impresoras

 public function insertarImpresora($arg_departamento, $arg_tipo, $arg_marca, $arg_enciende, $arg_cable_c, $arg_cable_usb, $arg_toner, $arg_falla, $arg_traido, $arg_recibido, $arg_reparado, $arg_entregado, $arg_entrada, $arg_salida, $arg_observacion){
     $modelo= new Conexion();
     $conexion=$modelo->get_conexion();
     $sql= "insert into impresoras (departamento, tipo, marca, enciende, cable_c, cable_usb, toner, falla, traido, recibido, reparado, entregado, entrada, salida, observacion) values (:departamento, :tipo, :marca, :enciende, :cable_c, :cable_usb, :toner, :falla, :traido, :recibido, :reparado, :entregado, :entrada, :salida, :observacion)";
     $statement=$conexion->prepare($sql);
     $statement->bindParam(':departamento', $arg_departamento);
     $statement->bindParam(':tipo', $arg_tipo);
     $statement->bindParam(':marca', $arg_marca);
     $statement->bindParam(':enciende', $arg_enciende);
     $statement->bindParam(':cable_c', $arg_cable_c);
     $statement->bindParam(':cable_usb', $arg_cable_usb);
     $statement->bindParam(':toner', $arg_toner);
     $statement->bindParam(':falla', $arg_falla);
     $statement->bindParam(':traido', $arg_traido);
     $statement->bindParam(':recibido', $arg_recibido);
     $statement->bindParam(':reparado', $arg_reparado);
     $statement->bindParam(':entregado', $arg_entregado);
     $statement->bindParam(':entrada', $arg_entrada);
     $statement->bindParam(':salida', $arg_salida);
     $statement->bindParam(':observacion', $arg_observacion);
     

     if (!$statement) {
      return "error al crear registro";

     }
     else

      {
         $statement->execute();

      return "registro creado correctamente";
       }
  }


    public function eliminarImpresora($arg_codigo){

          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="delete from impresoras where codigo = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(':codigo', $arg_codigo);
   if(!$statement) {
      return "error al eliminar registro";
     } else {

             $statement->execute();
            return "registro eliminado correctamente" ;     
         }

 }

   public function cargarImpresoras(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from impresoras";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }
     public function cargarImpresora($codigo){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from impresoras where codigo = $codigo ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

  }

      public function buscarImpresora($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from impresoras where codigo like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;

  }


  public function modificarImpresora($arg_campo, $arg_valor, $arg_codigo){
 $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="update impresoras set $arg_campo = :valor where codigo = :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":valor", $arg_valor);
    $statement->bindParam(":codigo", $arg_codigo);
    if (!$statement) {

        return "error al modificar registro ";

      }else{

        $statement->execute();
        return "registro modificado correctamente";
    }

   
}

public function buscarImpresora3($arg_codigo){

  $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $codigo="%".$arg_codigo."%";
    $sql="select * from impresoras where codigo like :codigo";
    $statement=$conexion->prepare($sql);
    $statement->bindParam(":codigo",$codigo);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
}



//combo de numero de viviendas
 public function combo(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from equipos ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

//combo de numero de cedula del jefe
   public function combo2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from monitores ";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

  //no usar por ahora

    //cargar adultos mayores
   public function cargarAdultos(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where edad >=50 "; 
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

  public function cargarAdultos2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar   where edad_miembro >=50"; 
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

//cargar menores de edad
     public function cargarMenores(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where edad_miembro <=18";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

     public function cargarEmbarazadas(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where embarazada = 'si'";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

   public function cargarEmbarazada2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where embarazada_m = 'si'";
    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

       public function cargarDiscapacidad(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from jefes_familia where discapacitado='si'"; 

    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }
         public function cargarDiscapacidad2(){
    $rows=null;
    $modelo = new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="select * from grupo_familiar where discapacidad_miembro ='si'"; 

    $statement=$conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()) {
      
      $rows[]=$result;
    }

    return $rows;
  }

}

<?php

include_once("alumno.php");


if(@file_exists('./Collector') ) {
    include_once("./Collector.php");
}else if(@file_exists('../Collector')){
   include_once("../Collector.php");
}else if(@file_exists('Collector.php')){
  include_once("Collector.php");
}
else if(@file_exists('./../Collector.php')){
  include_once("./../Collector.php");
}


class alumnoCollector extends Collector
{
  
  function showalumno($id) {
    $row = self::$db->getRows("SELECT * FROM alumno where idalumno= ? ", array("{$id}")); 
    $Objalumno = new alumno($row[0]{'idalumno'},$row[0]{'nombre1'},$row[0]{'nombre2'},$row[0]{'apellido1'},$row[0]{'apellido2'},$row[0]{'convencional'},$row[0]{'movil'},$row[0]{'direccion'},$row[0]{'email'},$row[0]{'estado'});
    return $Objalumno;
  }

  function createalumno($nombre1, $nombre2, $apellido1, $apellido2, $convencional, $movil, $direccion, $email, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO citas.alumno (idalumno, nombre1, nombre2, apellido1, apellido2, convencional, movil, direccion, email, estado) VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre1}", "{$nombre2}", "{$apellido1}", "{$apellido2}"));
  }  

  function readAlumnos(){
        $rows = self::$db->getRows("SELECT * FROM alumno");
        $arrayalumno = array();
        foreach ($rows as $c){
            $aux = new Alumno($c{'idalumno'},$c{'nombre1'},$c{'nombre2'},$c{'apellido1'},$c{'apellido2'},$c{'convencional'},$c{'movil'},$c{'direccion'},$c{'email'},$c{'estado'});
            array_push($arrayalumno, $aux);
          }
        return $arrayalumno;
    }  

  
  function updatealumno($id,$nombre1,$nombre2,$apellido1,$apellido2, $convencional, $movil, $direccion, $email, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE citas.alumno SET alumno.nombre1 = ? and SET alumno.nombre2 = ? and SET alumno.apellido1 = ? and SET alumno.apellido2 = ? and SET alumno.convencional = ? and SET alumno.movil = ? and SET alumno.direccion = ? and SET alumno.email = ? and SET alumno.estado = ?  WHERE idalumno = ? ", array( "{$nombre1}", "{$nombre2}","{$apellido1}","{$apellido2}","{$convecional}","{$movil}","{$direccion}","{$email}","{$estado}",$id));
  }  

  function deletealumno($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM citas.alumno WHERE idalumno = ?", array("{$id}"));
  }  
}
?>


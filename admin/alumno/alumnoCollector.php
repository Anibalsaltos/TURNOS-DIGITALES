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
    $Objalumno = new alumno($row[0]{'idalumno'},$row[0]{'nombre1'},$row[0]{'nombre2'},$row[0]{'apellido1'},$row[0]{'apellido2'});
    return $Objalumno;
  }

  function createalumno($nombre1, $nombre2, $apellido1, $apellido2) {    
    $insertrow = self::$db->insertRow("INSERT INTO citas.alumno (idalumno, nombre1, nombre2, apellido1, apellido2) VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre1}", "{$nombre2}", "{$apellido1}", "{$apellido2}"));
  }  

  function readAlumnos(){
        $rows = self::$db->getRows("SELECT * FROM alumno");
        $arrayalumno = array();
        foreach ($rows as $c){
            $aux = new Alumno($c{'idalumno'},$c{'nombre1'},$c{'nombre2'},$c{'apellido1'},$c{'apellido2'});
            array_push($arrayalumno, $aux);
          }
        return $arrayalumno;
    }  


  function updatealumno($id,$nombre1,$nombre2,$apellido1,$apellido2) {    
    $insertrow = self::$db->updateRow("UPDATE citas.alumno SET alumno.nombre1 = ? ,  alumno.nombre2 = ? ,  alumno.apellido1 = ? ,  alumno.apellido2 = ?  WHERE idalumno = ? ", array( "{$nombre1}", "{$nombre2}","{$apellido1}","{$apellido2}",$id));
  }  

  function deletealumno($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM citas.alumno WHERE idalumno = ?", array("{$id}"));
  }  
}
?>


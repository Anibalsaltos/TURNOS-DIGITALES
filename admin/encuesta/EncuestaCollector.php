<?php

include_once('Encuesta.php');

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

class EncuestaCollector extends Collector
{
  
  function showEncuesta($id) {
    $row = self::$db->getRows("SELECT * FROM encuesta where idencuesta= ? ", array("{$id}")); 
    $ObjEncuesta = new Encuesta($row[0]{'idencuesta'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $ObjEncuesta;
  }

  function createEncuesta($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO citas.encuesta (idencuesta, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$descripcion}", $estado));
  }  

  function readEncuestas() {
    $rows = self::$db->getRows("SELECT * FROM encuesta ");        
    $arrayEncuesta= array();        
    foreach ($rows as $c){
      $aux = new Encuesta($c{'idencuesta'},$c{'descripcion'},$c{'estado'});
      array_push($arrayEncuesta, $aux);
    }
    return $arrayEncuesta;        
  }
  
  function updateEncuesta($id,$descripcion, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE citas.encuesta SET encuesta.descripcion = ?, encuesta.estado = ?  WHERE encuesta.idencuesta = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deleteEncuesta($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM citas.encuesta WHERE idencuesta= ?", array("{$id}"));
  }  



}
?>


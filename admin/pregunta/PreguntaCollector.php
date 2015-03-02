<?php

include_once('Pregunta.php');

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

class PreguntaCollector extends Collector
{
  
  function showPregunta($id) {
    $row = self::$db->getRows("SELECT * FROM pregunta where idpregunta= ? ", array("{$id}")); 
    $ObjPregunta = new Pregunta($row[0]{'idpregunta'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $ObjPregunta;
  }

  function createPregunta($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO pregunta (idpregunta, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$descripcion}", $estado));
  }  

  function readPreguntas() {
    $rows = self::$db->getRows("SELECT * FROM pregunta ");
    $arrayPregunta= array();
    foreach ($rows as $c){
      $aux = new Pregunta($c{'idpregunta'},$c{'descripcion'},$c{'estado'});
      array_push($arrayPregunta, $aux);
    }
    return $arrayPregunta;        
  }
  
  function updatePregunta($id,$descripcion, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE pregunta SET pregunta.descripcion = ?, pregunta.estado = ?  WHERE pregunta.idpregunta = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deletePregunta($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM pregunta WHERE idpregunta= ?", array("{$id}"));
  }  



}
?>


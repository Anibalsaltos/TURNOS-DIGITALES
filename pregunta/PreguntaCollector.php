<?php

include_once('Pregunta.php');
include_once('Collector.php');

class PreguntaCollector extends Collector
{
  
  function showPregunta($id) {
    $row = self::$db->getRows("SELECT * FROM pregunta where idpregunta= ? ", array("{$id}")); 
    $ObjPregunta = new Pregunta($row[0]{'idpregunta'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $ObjPregunta;
  }

  function createPregunta($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.pregunta (idpregunta, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$nombre}", $estado));
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
    $insertrow = self::$db->updateRow("UPDATE clasedb.pregunta SET pregunta.descripcion = ?, pregunta.estado = ?  WHERE pregunta.iddemo = ? ", array( "{$descripcion}",$estado,$id));
  }  

  function deletePregunta($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.pregunta WHERE idpregunta= ?", array("{$id}"));
  }  



}
?>


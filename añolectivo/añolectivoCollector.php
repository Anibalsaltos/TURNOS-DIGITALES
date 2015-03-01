<?php

include_once('añolectivoClase.php');
include_once('Collector.php');

class ano_lectivoCollector extends Collector
{
  
    
    
  function showano_lectivo($id) {
    $row = self::$db->getRows("SELECT * FROM ano_lectivo where ano_lectivo_id = ? ", array("{$id}")); 
    $Objano_lectivo = new ano_lectivo($row[0]{'ano_lectivo_id'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $Objano_lectivo;
  }

  function createano_lectivo($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO ano_lectivo (ano_lectivo_id, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$estado}"));
  }  

  function readano_lectivos() {
    $rows = self::$db->getRows("SELECT * FROM ano_lectivo ");        
    $arrayano_lectivo= array();        
    foreach ($rows as $c){
      $aux = new ano_lectivo($c{'ano_lectivo_id'},$c{'descripcion'},$c{'estado'});
      array_push($arrayano_lectivo, $aux);
    }
    return $arrayano_lectivo;        
  }

  
  function updateano_lectivo($id, $descripcion, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE ano_lectivo SET ano_lectivo.descripcion = ? and SET ano_lectivo.estado = ? WHERE ano_lectivo_id = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deleteano_lectivo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ano_lectivo WHERE ano_lectivo_id= ?", array("{$id}"));
  }  



}
?>


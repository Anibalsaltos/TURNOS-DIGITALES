<?php

include_once('asignaturaClase.php');
include_once('CollectorDatabase.php');

class asignaturaCollector extends CollectorDatabase
{
  
    f 
    
  function showasignatura($id) {
    $row = self::$db->getRows("SELECT * FROM asignatura where asignatura_id = ? ", array("{$id}")); 
    $Objasignatura = new asignatura($row[0]{'asignatura_id'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $Objasignatura;
  }

  function createasignatura($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO asignatura (asignatura_id, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$estado}"));
  }  


  function readasignaturas() {
    $rows = self::$db->getRows("SELECT * FROM asignatura ");        
    $arrayasignatura array();        
    foreach ($rows as $c){
      $aux = new asignatura($c{'asignatura_id'},$c{'descripcion'},$c{'estado'});
      array_push($arrayasignatura, $aux);
    }
    return $arrayasignatura;        
  }

  
  function updateasignatura($id, $descripcion, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE asignatura SET asignatura.descripcion = ? and SET asignatura.estado = ? WHERE asignatura_id = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deleteasignatura($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM asignatura WHERE asignatura_id = ?", array("{$id}"));
  }  



}
?>


<?php

include_once('docente.php');
include_once('Collector.php');

class docenteCollector extends Collector
{
  
  function showdocente($id) {
    $row = self::$db->getRows("SELECT * FROM claseDB.docente where iddocente= ? ", array("{$id}"));
    $Objdocente = new Docente($row[0]{'iddocente'},$row[0]{'nombre'},$row[0]{'estado'});
    return $Objdocente;
  }

  function createdocente($nombre, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO claseDB.docente (iddocente,nombre, estado) VALUES (?, ?, ?)", array(null, "{$nombre}", "{$estado}"));
  }  

  function readdocentes() {
    $rows = self::$db->getRows("SELECT * FROM docente");        
    $arraydocente= array();        
    foreach ($rows as $c){
      $aux = new Docente($c{'iddocente'},$c{'nombre'},$c{'estado'});
      array_push($arraydocente, $aux);
    }
    return $arraydocente;        
  }
  
  function updatedocente($iddocente,$nombre, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE claseDB.docente SET docente.nombre = ? , docente.estado= ? WHERE docente.iddocente = ? ", array( "{$nombre}","{$estado}",$iddocente));
  }  

  function deletedocente($iddocente) {    
    $deleterow = self::$db->deleteRow("DELETE FROM claseDB.docente WHERE iddocente= ?", array("{$iddocente}"));
  }  



}
?>


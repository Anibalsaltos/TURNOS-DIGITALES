<?php

include_once('aniolectivoClase.php');

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

class aniolectivoCollector extends Collector
{
  
  function showanio_lectivo($id) {
    $row = self::$db->getRows("SELECT * FROM anio_lectivo where idanio = ? ", array("{$id}")); 
    $Objano_lectivo = new anio_lectivo($row[0]{'idanio'},$row[0]{'anio'},$row[0]{'estado'});
    return $Objano_lectivo;
  }

  function createanio_lectivo($anio, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO anio_lectivo (idanio, anio, estado) VALUES (?, ?, ?)", array(null, "{$anio}", "{$estado}"));
  }  

  function readanio_lectivos() {
    $rows = self::$db->getRows("SELECT * FROM anio_lectivo ");        
    $arrayano_lectivo= array();        
    foreach ($rows as $c){
      $aux = new anio_lectivo($c{'idanio'},$c{'anio'},$c{'estado'});
      array_push($arrayano_lectivo, $aux);
    }
    return $arrayano_lectivo;        
  }

  
  function updateanio_lectivo($id, $anio, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE anio_lectivo SET anio_lectivo.anio = ? , anio_lectivo.estado = ? WHERE idanio = ? ", array( "{$anio}","{$estado}",$id));
  }  

  function deleteanio_lectivo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM anio_lectivo WHERE idanio= ?", array("{$id}"));
  }  



}
?>


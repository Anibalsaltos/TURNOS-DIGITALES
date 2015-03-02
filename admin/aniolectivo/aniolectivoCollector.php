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
    $row = self::$db->getRows("SELECT * FROM anio_lectivo where anio_lectivo_id = ? ", array("{$id}")); 
    $Objano_lectivo = new ano_lectivo($row[0]{'anio_lectivo_id'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $Objano_lectivo;
  }

  function createanio_lectivo($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO anio_lectivo (anio_lectivo_id, descripcion, estado) VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$estado}"));
  }  

  function readanio_lectivos() {
    $rows = self::$db->getRows("SELECT * FROM anio_lectivo ");        
    $arrayano_lectivo= array();        
    foreach ($rows as $c){
      $aux = new ano_lectivo($c{'anio_lectivo_id'},$c{'descripcion'},$c{'estado'});
      array_push($arrayano_lectivo, $aux);
    }
    return $arrayano_lectivo;        
  }

  
  function updateanio_lectivo($id, $descripcion, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE anio_lectivo SET anio_lectivo.descripcion = ? and SET anio_lectivo.estado = ? WHERE anio_lectivo_id = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deleteanio_lectivo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM anio_lectivo WHERE anio_lectivo_id= ?", array("{$id}"));
  }  



}
?>


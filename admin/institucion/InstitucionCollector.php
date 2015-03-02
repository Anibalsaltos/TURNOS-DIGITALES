<?php

include_once('Institucion.php');

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

class InstitucionCollector extends Collector
{
  
  function showInstitucion($id) {
    $row = self::$db->getRows("SELECT * FROM institucion where idinstitucion= ? ", array("{$id}")); 
    $ObjInstitucion = new Institucion($row[0]{'idinstitucion'},$row[0]{'descripcion'},$row[0]{'estado'});
    return $ObjInstitucion;
  }

  function createInstitucion($descripcion, $estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO institucion (idinstitucion,descripcion ,estado) VALUES (? ,?, ?)", array(null, "{$descripcion}", "{$estado}"));
  }  

  function readInstituciones() {
    $rows = self::$db->getRows("SELECT * FROM institucion ");        
    $arrayInstitucion= array();        
    foreach ($rows as $c){
      $aux = new Institucion($c{'idinstitucion'},$c{'descripcion'},$c{'estado'});
      array_push($arrayInstitucion, $aux);
    }
    return $arrayInstitucion;        
  }
  
  function updateInstitucion($id,$descripcion,$estado) {    
    $insertrow = self::$db->updateRow("UPDATE institucion SET descripcion = ? , estado = ? WHERE idinstitucion = ? ", array( "{$descripcion}","{$estado}",$id));
  }  

  function deleteInstitucion($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM institucion WHERE idinstitucion= ?", array("{$id}"));
  }
}
?>


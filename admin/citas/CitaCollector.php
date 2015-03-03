<?php

include_once('Cita.php');

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

class CitaCollector extends Collector
{
  
  function showcita($id) {
    $row = self::$db->getRows("SELECT * FROM cita where idcita= ? ", array("{$id}")); 
    $Objcita = new Cita($row[0]{'idcita'},$row[0]{'idDocente'},$row[0]{'idRepresentante'},$row[0]{'hora'},$row[0]{'dia'});
    return $Objcita;
  }

  function createcita($idDocente,$idRepresentante,$hora,$dia) {    
    $insertrow = self::$db->insertRow("INSERT INTO cita (idcita, idRepresentante,idDocente,hora , dia) VALUES (?, ?,?,?,?)", array(null, $idRepresentante,$idDocente,"{$hora}","{$dia}"));
  }  

  function readcitas() {
    $rows = self::$db->getRows("SELECT * FROM cita ");        
    $arraycita= array();        
    foreach ($rows as $c){
      $aux = new Cita($c{'idcita'},$c{'idRepresentante'},$c{'idDocente'},$c{'hora'},$c{'dia'});
      array_push($arraycita, $aux);
    }
    return $arraycita;        
  }
  
  function updatecita($id,$idDocente,$idRepresentante,$hora,$dia) {    
    $insertrow = self::$db->updateRow("UPDATE cita SET cita.idRepresentante = ?, idDocente =?, hora=?, dia=?  WHERE cita.idcita = ? ", array( "{$idRepresentante}","{$idDocente}","{$hora}","{$dia}",$id));
  }  

  function deletecita($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM cita WHERE idcita= ?", array("{$id}"));
  }  



}
?>


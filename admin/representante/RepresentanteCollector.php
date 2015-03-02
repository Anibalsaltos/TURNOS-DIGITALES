<?php

include_once('Representante.php');
//include_once('./Collector.php');
//include("../Collector.php");

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


class RepresentanteCollector extends Collector
{
  
  function showRepresentante($id) {
    $row = self::$db->getRows("SELECT * FROM representante where idrepresentante= ? ", array("{$id}")); 
    $ObjRepresentante = new Representante($row[0]{'idrepresentante'},$row[0]{'nombre1'},$row[0]{'nombre2'},$row[0]{'apellido1'},$row[0]{'apellido2'},$row[0]{'convencional'},$row[0]{'movil'},$row[0]{'direccion'},$row[0]{'email'},$row[0]{'estado'});
    return $ObjRepresentante;
  }

  function createRepresentante($nombre1, $nombre2, $apellido1, $apellido2, $convencional , $movil, $direccion, $email, $estado) { 
    $insertrow = self::$db->insertRow("INSERT INTO citas.representante (idrepresentante, nombre1,nombre2, apellido1, apellido2, convencional, movil , direccion, email, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$nombre1}", "{$nombre2}", "{$apellido1}", "{$apellido2}", "{$convencional}", "{$movil}", "{$direccion}", "{$email}", "{$estado}"));
  }  

  function readRepresentantes() {
    $rows = self::$db->getRows("SELECT * FROM representante ");        
    $arrayRepresentante= array();        
    foreach ($rows as $c){
      $aux = new Representante($c{'idrepresentante'},$c{'nombre1'},$c{'nombre2'},$c{'apellido1'},$c{'apellido2'},$c{'convencional'},$c{'movil'},$c{'direccion'},$c{'email'},$c{'estado'});
      array_push($arrayRepresentante, $aux);
    }
    return $arrayRepresentante;        
  }
  
  function updateRepresentante($id, $nombre1, $nombre2, $apellido1, $apellido2, $convencional , $movil, $direccion, $email, $estado) {    
    $insertrow = self::$db->updateRow("UPDATE representante SET representante.nombre1 = ? , representante.nombre2 = ?, representante.apellido1 = ?, representante.apellido2 = ? , representante.convencional = ? , representante.movil = ? , representante.direccion = ? , representante.email = ? , representante.estado = ? WHERE representante.idrepresentante = ? ", array( "{$nombre1}", "{$nombre2}", "{$apellido1}", "{$apellido2}", "{$convencional}", "{$movil}", "{$direccion}", "{$email}", "{$estado}",$id));
  }  

  function deleteRepresentante($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM representante WHERE idrepresentante= ?", array("{$id}"));
  }  



}
?>


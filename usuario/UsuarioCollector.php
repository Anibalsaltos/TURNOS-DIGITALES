<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}")); 
    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'sesion'},$row[0]{'nombre'});
    return $ObjUsuario;
  }

  function createUsuario($sesion, $nombre) {
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.usuario (idusuario, sesion, nombre) VALUES (?, ?, ?)", array(null, "{$sesion}", "{$nombre}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'sesion'},$c{'nombre'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$sesion,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.usuario SET sesion = ?, nombre = ?  WHERE idusuario = ? ", array( "{$sesion}","{$nombre}",$id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.usuario WHERE idusuario= ?", array("{$id}"));
  }  



}
?>


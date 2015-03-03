<?php

include_once('Usuario.php');

// if(@file_exists('./Collector') ) {
//     include_once("./Collector.php");
// }else if(@file_exists('../Collector')){
//    include_once("../Collector.php");
// }else if(@file_exists('Collector.php')){
//   include_once("Collector.php");
// }
// else if(@file_exists('./../Collector.php')){
//   include_once("./../Collector.php");
// }
// else if(@file_exists('Collector.php')){
//   include_once("Collector.php");
// }


// directorio actual
//echo getcwd() . "\n";
 
 
// directorio actual 
//echo getcwd() . "\n";

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
else if(@file_exists('Collector.php')){
  include_once("Collector.php");
}
 
class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}")); 
    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'usuario'},$row[0]{'password'},$row[0]{'idRepresentante'});
    return $ObjUsuario;
  }

  function createUsuario($usuario, $password,$idRepresentante) {
    $insertrow = self::$db->insertRow("INSERT INTO usuario (idusuario, usuario, password, idRepresentante) VALUES (?, ?, ?, ?)", array(null, "{$usuario}", "{$password}", "{$idRepresentante}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'password'},$c{'idRepresentante'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$password) {    
    $insertrow = self::$db->updateRow("UPDATE usuario SET password = ?  WHERE idusuario = ? ", array( "{$password}",$id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM usuario WHERE idusuario= ?", array("{$id}"));
  }  



}
?>


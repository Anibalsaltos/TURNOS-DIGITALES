<?php

class ano_lectivo
{
    private $ano_lectivo_id;
    private $descripcion;
    private $estado;
    
     
    function __construct($ano_lectivo_id, $descripcion, $estado) {   
      $this->ano_lectivo_id = $ano_lectivo_id;
      $this->nombre1 = $descripcion;
      $this->apellido1 = $estado;

     }
    
     function setano_lectivo_id($ano_lectivo_id){
       $this->ano_lectivo_id = $ano_lectivo_id;
     } 
     function getano_lectivo_id(){
       return $this->ano_lectivo_id;
     } 
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescricion(){
       return $this->descripcion;
     } 
     function setestado($estado){
       $this->estado = $estado;
     } 
     function getestado(){
       return $this->estado;
     }      
}

?> 

<?php

class Institucion
{
    private $idInstitucion;
    private $descripcion;
    private $estado;
    
     function __construct($idInstitucion, $descripcion, $estado) {
       $this->idInstitucion = $idInstitucion;
       $this->descripcion = $descripcion;
       $this->estado = $estado;
     }
    
     function setIdInstitucion($idInstitucion){
       $this->idInstitucion = $idInstitucion;
     } 
     function getIdInstitucion(){
       return $this->idInstitucion;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
     function setEstado($estado){
      $this->estado = $estado;
     }
     function getEstado(){
      return $this->estado;
     }
}

?> 

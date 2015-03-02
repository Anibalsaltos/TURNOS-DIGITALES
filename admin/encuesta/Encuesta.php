<?php

class Encuesta
{
    private $idEncuesta;
    private $descripcion;
    private $estado;
    
     function __construct($idEncuesta, $descripcion ,$estado) {
       $this->idEncuesta = $idEncuesta;
       $this->descripcion = $descripcion;
       $this->estado = $estado;
     }
    
     function setIdEncuesta($idEncuesta){
       $this->idEncuesta = $idEncuesta;
     } 
     function getIdEncuesta(){
       return $this->idEncuesta;
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

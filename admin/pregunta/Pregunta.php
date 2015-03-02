<?php

class Pregunta
{
    private $idPregunta;
    private $descripcion;
    private $estado;
    
     function __construct($idPregunta, $descripcion ,$estado) {
       $this->idPregunta = $idPregunta;
       $this->descripcion = $descripcion;
       $this->estado = $estado;
     }
    
     function setIdPregunta($idPregunta){
       $this->idPregunta = $idPregunta;
     } 
     function getIdPregunta(){
       return $this->idPregunta;
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

<?php

class anio_lectivo
{
    private $idanio;
    private $anio;
    private $estado;
    
     
    function __construct($idanio, $anio, $estado) {   
      $this->idanio = $idanio;
      $this->anio = $anio;
      $this->estado = $estado;

     }
    
     function setAnioLectivo($idanio){
       $this->idanio = $idanio;
     } 
     function getAnioLectivo(){
       return $this->idanio;
     } 
     function setAnio($anio){
       $this->anio = $anio;
     } 
     function getAnio(){
       return $this->anio;
     } 
     function setEstado($estado){
       $this->estado = $estado;
     } 
     function getEstado(){
       return $this->estado;
     }      
}

?> 

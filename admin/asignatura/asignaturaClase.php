<?php

class Asignatura
{
    private $asignatura_id;
    private $descripcion;
    private $estado;
    
     
    function __construct($asignatura_id, $descripcion, $estado) {   
      $this->asignatura_id = $asignatura_id;
      $this->nombre1 = $descripcion;
      $this->apellido1 = $estado;

     }
    
     function setasignatura_id($asignatura_id){
       $this->asignatura_id = $asignatura_id;
     } 
     function getasignatura_id(){
       return $this->asignatura_id;
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

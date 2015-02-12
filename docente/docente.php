<?php

class Docente
{
    private $idDocente;
    private $nombre;
    private $estado;
    
     function __construct($idDocente, $nombre, $estado) {
       $this->estado = $estado;
       $this->idDocente = $idDocente;
       $this->nombre = $nombre;
     }
    
     function setIdDocente($idDocente){
       $this->idDocente = $idDocente;
     } 
     function getIdDocente(){
       return $this->idDocente;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setEstado($estado){
      $this->$estado = $estado;
     }
     function getEstado(){
       return $this->estado;
     }

}

?> 

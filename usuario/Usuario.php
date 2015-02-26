<?php

class Usuario
{
    private $idUsuario;
    private $sesion;
    private $nombre;
    
     function __construct($idUsuario, $sesion, $nombre) {
       $this->idUsuario = $idUsuario;
       $this->sesion = $sesion;
       $this->nombre = $nombre;
     }
    
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 

     function setSesion($sesion){
       $this->sesion = $sesion;
     } 
     function getSesion(){
       return $this->sesion;
     } 

     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 

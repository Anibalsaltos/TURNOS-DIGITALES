<?php

class alumno
{
    private $idalumno;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    
     function __construct($idalumno, $nombre1, $nombre2, $apellido1, $apellido2) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
     }
    
     function setIdalumno($idalumno){
       $this->idalumno = $idalumno;
     } 
     function getIdalumno(){
       return $this->idalumno;
     } 
     function setNombre1($nombre1){
       $this->nombre1 = $nombre1;
     } 
     function getNombre1(){
       return $this->nombre1;
     } 
     function setNombre2($nombre2){
       $this->nombre2 = $nombre2;
     } 
     function getNombre2(){
       return $this->nombre2;
     } 
     function setApellido1($apellido1){
       $this->apellido1 = $apellido1;
     } 
     function getApellido1(){
       return $this->apellido1;
     } 
     function setApellido2($apellido2){
       $this->apellido2 = $apellido2;
     } 
}

?> 

<?php

class Alumno
{
    private $alumno_id;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $convencional;
    private $movil;
    private $direccion;
    private $email;
    private $estado;
    
    function __construct($alumno_id, $nombre1, $nombre2, $apellido1, $apellido2, $convencional, $movil, $direccion, $email, $estado) {
      
        $this->alumno_id = $alumno_id;
       $this->nombre1 = $nombre1;
       $this->nombre2 = $nombre2;
       $this->apellido1 = $apellido1;
       $this->apellido2 = $apellido2;
       $this->convencional = $convencional;
       $this->movil = $movil;
       $this->direccion = $direccion;
       $this->email = $email;
       $this->estado = $estado;
     }
    
     function setalumno_id($alumno_id){
       $this->alumno_id = $alumno_id;
     } 
     function getalumno_id(){
       return $this->alumno_id;
     } 
     function setnombre1($nombre1){
       $this->nombre1 = $nombre1;
     } 
     function getnombre1(){
       return $this->nombre1;
     } 
     function setnombre2($nombre2){
       $this->nombre2 = $nombre2;
     } 
     function getnombre2(){
       return $this->nombre2;
     } 
     function setapellido1($apellido1){
       $this->apellido1 = $apellido1;
     } 
     function getapellido1(){
       return $this->apellido1;
     } 
     function setapellido2($apellido2){
       $this->apellido2 = $apellido2;
     } 
     
     function setconvencional($convencional){
       $this->convencional = $convencional;
     } 
     function getconvencional(){
       return $this->convencional;
     } 
     
     function setmovil($movil){
       $this->movil = $movil;
     } 
     function getmovil(){
       return $this->movil;
     } 
     
     function setdireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getdireccion(){
       return $this->direccion;
     } 
     function setemail($email){
       $this->email = $email;
     } 
     function getemail(){
       return $this->email;
     } 
     
     function setestado($estado){
       $this->estado = $estado;
     } 
     function getestado(){
       return $this->estado;
     } 
}

?> 

<?php

class Representante
{
    private $idRepresentante;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $convencional;
    private $movil;
    private $direccion;
    private $email;
    private $estado;
    
     function __construct($idRepresentante, $nombre1, $nombre2, $apellido1, $apellido2, $convencional, $movil, $direccion, $email , $estado) {
       $this->idRepresentante = $idRepresentante;
       $this->nombre1 = $nombre1;
       $this->nombre2 = $nombre2;
       $this->apellido1 = $apellido1;
       $this->apellido2 = $apellido2;
       $this->convencional= $convencional;
       $this->movil = $movil;
       $this->direccion = $direccion;
       $this->email = $email;
       $this->estado = $estado;
     }
    
     function setIdRepresentante($idRepresentante){
       $this->idRepresentante = $idRepresentante;
     } 
     function getIdRepresentante(){
       return $this->idRepresentante;
     } 
     function setNombre1($nombre){
       $this->nombre1 = $nombre;
     } 
     function getNombre1(){
       return $this->nombre1;
     } 
     function setNombre2($nombre){
       $this->nombre2 = $nombre;
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
     function getApellido2(){
       return $this->apellido2;
     } 
     function setConvencional($convencional){
       $this->convencional = $convencional;
     } 
     function getConvencional(){
       return $this->convencional;
     } 
     function setMovil($movil){
       $this->movil = $movil;
     } 
     function getMovil(){
       return $this->movil;
     } 
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setEstado($estado){
       $this->estado = $estado;
     } 
     function getEstado(){
       return $this->estado;
     } 
}

?> 

<?php

class Usuario
{
    private $idUsuario;
    private $usuario;
    private $password;
    private $idRepresentante;
    
     function __construct($idUsuario, $usuario, $password,$idRepresentante) {
       $this->idUsuario = $idUsuario;
       $this->usuario = $usuario;
       $this->password = $password;
       $this->idRepresentante = $idRepresentante;
     }
    
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 

     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 

     function setPassword($password){
       $this->password = $password;
     } 
     function getPassword(){
       return $this->password;
     } 
     function setidRepresentante($idRepresentante){
       $this->idRepresentante = $idRepresentante;
     } 
     function getIdRepresentante(){
       return $this->idRepresentante;
     } 
}

?> 

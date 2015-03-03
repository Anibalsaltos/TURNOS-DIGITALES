<?php

class Cita
{
    private $idCita;
    private $idDocente;
    private $idRepresentante;
    private $hora;
    private $dia;
     function __construct($idCita, $idDocente,$idRepresentante, $hora,$dia) {
       $this->idCita = $idCita;
       $this->idDocente = $idDocente;
       $this->idRepresentante = $idRepresentante;
       $this->hora = $hora;
       $this->dia = $dia;
     }
    
     function setIdCita($idCita){
       $this->idCita = $idCita;
     } 
     function getIdCita(){
       return $this->idCita;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getIdDocente(){
       return $this->idDocente;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setidRepresentante($idRepresentante){
       $this->idRepresentante = $idRepresentante;
     } 
     function getIdRepresentante(){
       return $this->idRepresentante;
     } 
     function setHora($hora){
       $this->hora = $hora;
     } 
     function getHora(){
       return $this->hora;
     } 
     function setDia($dia){
       $this->dia = $dia;
     } 
     function getDia(){
       return $this->dia;
     } 
}

?> 

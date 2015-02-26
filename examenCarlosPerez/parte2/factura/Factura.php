<?php

class Factura
{
    private $idFactura;
    private $descripcion;
    private $total;
    
     function __construct($idFactura, $descripcion, $total) {
       $this->idFactura = $idFactura;
       $this->descripcion = $descripcion;
       $this->total = $total;
     }
    
     function setIdFactura($idFactura){
       $this->idFactura = $idFactura;
     } 
     function getIdFactura(){
       return $this->idFactura;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 

     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
}

?> 

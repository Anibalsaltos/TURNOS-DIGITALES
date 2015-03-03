<?php 

class Salon{

	private $id;
	private $descripcion;
	private $estado;

	function __construct($id , $descripcion, $estado){
		$this->id = $id;
		$this->descripcion = $descripcion;
		$this->estado = $estado;

	}
	function setId($id){
		$this->id = $id;
	}
	function getId(){
		return $this->id;
	}
	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	function getDescripcion(){
		return $this->descripcion;
	}
	function setEstado($estado){
		$this->estado = $estado;
	}
	function getEstado(){
		return $this->estado;
	}

}
 ?>
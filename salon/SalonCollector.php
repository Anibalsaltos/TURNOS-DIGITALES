<?php 

include_once("Salon.php");
include_once("Collector.php");

class SalonCollector extends Collector{

	function leerSalon($id){
		$row = self::$db->getRows("SELECT * FROM salon where idsalon=?",array($id));
		$objSalon = new Salon($row[0]{'idsalon'},$row[0]{'descripcion'},$row[0]{'estado'});
		return $objSalon;
	}
	function leerSalones(){
		$rows = self::$db->getRows("SELECT * FROM salon");
		$arraySalones = array();
		foreach ($rows as $salon) {
				$aux = new Salon($salon{'idsalon'},$salon{'descripcion'},$salon{'estado'});
				array_push($arraySalones, $aux);
		}
		return $arraySalones;
	} 
	function crearSalon($descripcion , $estado){
		$rows = self::$db->insertRow("INSERT INTO salon (idsalon , descripcion, estado) VALUES ( ? , ? , ?)",array(null , "{$descripcion}", "{$estado}"));

	}
	function editarSalon($id, $descripcion, $estado){
		$rows = self::$db->updateRow("UPDATE salon SET descripcion = ?, estado = ? where idsalon = ?",array("{$descripcion}", "{$estado}" , $id));
	}
	function eliminarSalon($id){
		$rows = self::$db->deleteRow("DELETE FROM salon where idsalon = ?",array($id));
	}
}

 ?>
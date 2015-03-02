<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Salón Agregado</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<body>

		<?php 
		$descripcion = $_POST["descripcion"];
		$estado = $_POST["estado"];

		include_once("SalonCollector.php");

		$objSalonCollector = new SalonCollector();
		$objSalonCollector->crearSalon($descripcion, $estado);
		 ?>
		<h1>Salón Agregado</h1>

		<a href="../index.php">regresar</a>
	</body>
</html>
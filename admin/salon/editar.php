<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Salón - Editar</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<h1>Salón - Editar</h1>

		<?php 
		$id=$_POST["id"];
		$descripcion = $_POST["descripcion"];
		$estado =$_POST["estado"];


		include_once("SalonCollector.php");
		$objSalonCollector = new SalonCollector();
		$objSalonCollector->editarSalon($id, $descripcion, $estado);

		 ?>

		 <h2>Datos actualizados</h2>

		<a href="../index.php">Regresar</a>


	</body>
</html>
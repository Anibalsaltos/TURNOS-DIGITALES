<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Eliminar Salón</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<h1>Eliminar Salón</h1>
		

		<?php 
		$id = $_GET["id"];
		include_once("SalonCollector.php");
		
		$objSalonCollector = new SalonCollector();
		$objSalonCollector->eliminarSalon($id); 

		echo "<h2> Salon ".$id." Eliminado</h2>";
		?>
		<a href="index.php">Regresar</a>
	</body>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Salón</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<?php 
	include_once ("Salon.php");
	include_once ("SalonCollector.php");

	$objSalonCollector = new SalonCollector();

	 ?>
	<body>
		<h1>Salón</h1>

		<table>
			<tr><td><a href="formularioSalonInsert.php">Nuevo</a></td></tr>
			<tr>
			<th>ID</th>
			<th>Descripcion</th>
			<th>Estado</th>
		</tr>

			<?php 
			foreach ($objSalonCollector->leerSalones() as $c) {
				
				echo "<tr>";
				echo "<td>".$c->getId()."</td>";
				echo "<td>".$c->getDescripcion()."</td>";
				echo "<td>".$c->getEstado()."</td>";

				echo "<td><a href='formularioSalonEditar.php?id=".$c->getId()."'>Editar</a></td>";
				echo "<td><a href='eliminar.php?id=".$c->getId()."'>Eliminar</a></td>";
				echo "</tr>";
			}

			?>

		</table>
	</body>
</html>
<?php 
	include_once ("Salon.php");
	include_once ("SalonCollector.php");
	$objSalonCollector = new SalonCollector();

?>
<table>
		<tr><td><a href="salon/formularioSalonInsert.php">Nuevo</a></td></tr>
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

		echo "<td><a href='salon/formularioSalonEditar.php?id=".$c->getId()."'>Editar</a></td>";
		echo "<td><a href='salon/eliminar.php?id=".$c->getId()."'>Eliminar</a></td>";
		echo "</tr>";
		}

	?>
</table>
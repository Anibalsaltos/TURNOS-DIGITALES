<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Editar salon</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<?php 
	$id=$_GET["id"];

	include_once("Salon.php");
	include_once("SalonCollector.php");

	$ObjSalon = new SalonCollector();
	$salon= $ObjSalon->leerSalon($id);
	 ?>
	<body>
		<h1>Editar salon</h1>
		<form action="editar.php" method="POST">
		<p>Id : <input type="text" name="id" value="<?php echo $salon->getId(); ?>"  readonly/>
		</p>
		<p>Descripcion : <input type="text" value="<?php echo $salon->getDescripcion(); ?>" name="descripcion" autofocus required/>
		</p>
		<p>Estado : 
			<select name="estado">
		<?php 
			if($salon->getEstado() == 0){
		 ?>
		<option value="0">Ocupado</option>
		<option value="1">Disponible</option>
		<?php 
		} else{
		?>
		<option value="1">Disponible</option>
		<option value="0">Ocupado</option>
		<?php } ?>

</select>
		</p>

		<a href="index.php">Cancelar</a>
		<input type="submit" value="Guardar"/>
		</form>

	</body>
</html>
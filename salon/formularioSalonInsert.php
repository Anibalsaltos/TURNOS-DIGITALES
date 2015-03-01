<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Insertar Salón</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
	</head>
	<body>
		<h1>Insertar Salón</h1>

		<form action="insert.php" method="POST">
			<p>Descripcion: <input type="text" name="descripcion" required autofocus></p>
			<p>Estado :
				<select name="estado">
					<option value="1">Disponible</option>
					<option value="0">Ocupado</option>
				</select></p>

				<a href="index.php">Cancelar</a>
				<input type="submit" value="Guardar"/>

		</form>


	</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>
<form action="insert.php" method="post" >
<p>
PrimerNombre: <input type="text" name="nombre1" required />
</p>
<p>
SegundoNombre: <input type="text" name="nombre2" required />
</p>
<p>
ApellidoMaterno: <input type="text" name="apellido1" required />
</p>
<p>
ApellidoPaterno: <input type="text" name="apellido2" required />
</p>
<p>
Convencional: <input type="tel" name="convencional" required />
</p>
<p>
Movil: <input type="tel" name="movil" required />
</p>
<p>
Direccion: <input type="text" name="direccion" required />
</p>
<p>
email: <input type="email" name="correo" required />
</p>
<p>
Estado: 
<select name="estado">
	<option value="1">Activo</option>
	<option value="0">Suspendido</option>
</select>
</p>
<input type="submit" value="Guardar!" />

</form>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Encuesta</title>
</head>
<body>
<form action="insert.php" method="post" >

<p>Descripción: <input type="text" name="descripcion" autofocus required /></p>
<p>Estado :
<select name="estado">
	<option value="0">Deshabilitado</option>
	<option value="1">Habilitado</option>
</select>
</p>

<input type="submit" value="Hecho!" />

</form>

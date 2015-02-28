<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>
<form action="insert.php" method="post" >
<p>
Descripcion: <input type="text" name="descripcion" autofocus required />
</p>
<p>
Estado: 
<select name="estado">
	<option value="1">Activo</option>
	<option value="0">Inactiva</option>
</select>
</p>
<input type="submit" value="Submit!" />

</form>

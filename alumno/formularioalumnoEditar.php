<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("alumnoCollector.php");
include_once("alumno.php");
$alumnoCollectorObj = new alumnoCollector();
$Objalumno = $alumnoCollectorObj->showalumno($id);
?>
<h2>Editar Objeto alumno </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idalumno" value="<?php echo $Objalumno->getIdalumno(); ?>" readonly />
</p>

<p>
Primer Nombre: <input type="text" name="Primer Nombre"  value="<?php echo $Objalumno->getNombre1(); ?>" autofocus required />

Segundo Nombre: <input type="text" name="Segundo Nombre" value="<?php echo $Objalumno->getNombre2(); ?>" />	

Primer Apellido: <input type="text" name="Primer Apellido" value="<?php echo $Objalumno->getApellido1; ?>" />

Segundo Apellido: <input type="text" name="Segundo Apellido" value="<?php echo $Objalumno->getApellido2; ?>" />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

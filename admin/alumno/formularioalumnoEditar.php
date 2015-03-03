<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Alumno</title>
<body>
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

include_once("alumnoCollector.php");
include_once("alumno.php");
$alumnoCollectorObj = new alumnoCollector();
$Objalumno = $alumnoCollectorObj->showalumno($id);
?>
<h2>Editar alumno</h2>
<form action="editaralumno.php" method="post" >
<p>
Id: <input type="text" name="alumno_id" value="<?php echo $Objalumno->getIdalumno(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre1"  value="<?php echo $Objalumno->getNombre1(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="nombre2"  value="<?php echo $Objalumno->getNombre2(); ?>" required />
</p>
<p>
Nombre: <input type="text" name="apellido1"  value="<?php echo $Objalumno->getApellido1(); ?>" required />
</p>
<p>
Nombre: <input type="text" name="apellido2"  value="<?php echo $Objalumno->getApellido2(); ?>" required />
</p>
<a href="../index.php">Cancelar</a>
<input type="submit" value="Guardar"/>

</form>
</body>
</html>
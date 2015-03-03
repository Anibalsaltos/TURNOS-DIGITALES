<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Alumno</title>
<body>
<?php
$alumno_id=$_POST["alumno_id"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];

//echo "Edici&oacute;n en proceso ....  </br>";

include_once("alumnoCollector.php");
$alumnoCollectorObj = new alumnoCollector();
$alumnoCollectorObj->updatealumno($alumno_id,$nombre1,$nombre2,$apellido1,$apellido2);

//echo "id :".$alumno_id." actualizado a:".$nombre." </br>";
?>
<div><a href="../index.php">Regresar adminitracion</a></div>
</body>
</html>
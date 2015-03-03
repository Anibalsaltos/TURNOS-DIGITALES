<html>
<head>
</head>

<body>
<div id="main">
<?php

$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];

include_once("./alumnoCollector.php");

$DemoCollectorObj = new alumnoCollector();
$DemoCollectorObj->createalumno($nombre1,$nombre2,$apellido1,$apellido2);

echo "Alumno Agregado agregado </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

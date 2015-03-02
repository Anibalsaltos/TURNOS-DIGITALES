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
$iddemo=$_POST["idalumno"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("alumnoCollector.php");
$apellidoCollectorObj = new alumnoCollector();
$apellidoCollectorObj->updatealumno($iddemo,$nombre1,$nombre2,$apellido1,$apellido2);

//echo "id :".$iddemo." actualizado a:".$nombre." </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

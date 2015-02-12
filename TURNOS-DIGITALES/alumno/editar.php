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

include_once("apellidoCollector.php");
$apellidoCollectorObj = new apellidoCollector();
$apellidoCollectorObj->updateDemo($id,$nombre);

echo "id :".$iddemo." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

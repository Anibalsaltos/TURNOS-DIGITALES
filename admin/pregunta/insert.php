<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$estado = $_POST["estado"];

//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("PreguntaCollector.php");

$PreguntaCollectorObj = new PreguntaCollector();

echo $estado;

$PreguntaCollectorObj->createPregunta($descripcion, $estado);

echo "valor agregado </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

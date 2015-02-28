<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["descripcion"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("EncuestaCollector.php");

$EncuestaCollectorObj = new EncuestaCollector();
$EncuestaCollectorObj->createEncuesta($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

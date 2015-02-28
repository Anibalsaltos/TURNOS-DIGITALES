<html>
<head>
</head>

<body>
<div id="main">
<?php
$idencuesta=$_POST["idencuesta"];
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("EncuestaCollector.php");
$EncuestaCollectorObj = new EncuestaCollector();
$EncuestaCollectorObj->updateEncuesta($idencuesta,$descripcion, $estado);

echo "id :".$idencuesta." actualizado a:".$descripcion.." con estado:".$estado." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$idpregunta=$_POST["idpregunta"];
$estado = $_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("PreguntaCollector.php");
$preguntaCollectorObj = new PreguntaCollector();
$preguntaCollectorObj->updatePregunta($idpregunta,$descripcion,$estado);

echo "id :".$idpregunta." actualizado a:".$descripcion." estado :".$estado."</br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

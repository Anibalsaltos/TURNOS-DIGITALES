<html>
<head>
</head>

<body>
<div id="main">
<?php
$idpregunta=$_POST["idpregunta"];
$descripcion=$_POST["descripcion"];
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

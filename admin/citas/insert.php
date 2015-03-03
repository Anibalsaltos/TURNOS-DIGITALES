<html>
<head>
</head>

<body>
<div id="main">
<?php
$idRepresentante=$_POST["idRepresentante"];
$idDocente=$_POST["idDocente"];
$dia = $_POST["dia"];
$hora = $_POST["hora"];
//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("CitaCollector.php");

$citaCollectorObj = new CitaCollector();
$citaCollectorObj->createcita($idDocente,$idRepresentante,$hora,$dia);

echo "valor agregado </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

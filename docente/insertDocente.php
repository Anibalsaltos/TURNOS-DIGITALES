<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
$estado=$_POST["estado"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("docenteCollector.php");

$usuarioCollectorObj = new docenteCollector();
$usuarioCollectorObj->createdocente($valor,$estado);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

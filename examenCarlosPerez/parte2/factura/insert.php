<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$total=$_POST["total"];
//$total="manuel";
echo 'Hola, esta es la nueva factura : ' . htmlspecialchars($descripcion) .' '. htmlspecialchars($total) . '!';

include_once("FacturaCollector.php");

$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->createFactura($descripcion, $total);

echo "total agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

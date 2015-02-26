<html>
<head>
</head>

<body>
<div id="main">
<?php
$sesion=$_POST["sesion"];
$valor=$_POST["nombre"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($sesion) .' '. htmlspecialchars($valor) . '!';

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($sesion, $valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

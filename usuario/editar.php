<html>
<head>
	<meta charset="utf-8">
</head>

<body>
<div id="main">
<?php
$idusuario=$_POST["idusuario"];
$sesion=$_POST["sesion"];
$nombre=$_POST["nombre"];

echo "Edici&oacute;n en proceso ... </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idusuario,$sesion,$nombre);

echo "id :" . $idusuario . " actualizado a: " . $sesion .' '. $nombre. " </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

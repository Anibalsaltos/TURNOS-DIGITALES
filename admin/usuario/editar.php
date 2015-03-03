<html>
<head>
	<meta charset="utf-8">
</head>

<body>
<div id="main">
<?php
$idusuario=$_POST["idusuario"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];

//echo "Edici&oacute;n en proceso ... </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idusuario,$usuario,$password);

//echo "id :" . $idusuario . " actualizado a: " . $sesion .' '. $password. " </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

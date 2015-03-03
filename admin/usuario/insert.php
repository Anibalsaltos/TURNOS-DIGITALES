<html>
<head>
</head>

<body>
<div id="main">
<?php
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$representante=$_POST["idRepresentante"];
//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($sesion) .' '. htmlspecialchars($valor) . '!';

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($usuario, $password,$representante);

echo "valor agregado </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

<html>
<head>
</head>

<body>
<div id="main">
<?php

$id=$_POST["id"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$convencional=$_POST["convencional"];
$movil=$_POST["movil"];
$direccion=$_POST["direccion"];
$correo=$_POST["correo"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("RepresentanteCollector.php");
$RepresentanteCollectorObj = new RepresentanteCollector();
$RepresentanteCollectorObj->updateRepresentante($id,$nombre1,$nombre2,$apellido1,$apellido2,$convencional,$movil,$direccion,$correo,$estado);

echo "id :".$id." actualizado a:".$nombre1." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

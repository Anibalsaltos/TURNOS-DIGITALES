<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Año Lectivo</title>
<body>
<div id="container">
<?php

$anio=$_POST['anio'];
$estado=$_POST["estado"];


//echo "Nombre: " . $descripcion . "<br>";


include_once("aniolectivoCollector.php");
$anio_lectivoCollectorObj = new aniolectivoCollector();
$anio_lectivoCollectorObj->createanio_lectivo($anio,$estado);


echo "valor agregado </br>";
?>
<div><a href="../index.php">Regresar adminitracion</a></div>
</div>
</body>
</html>
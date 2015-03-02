<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$estado = $_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("docenteCollector.php");
$DocenteCollectorObj = new DocenteCollector();
$DocenteCollectorObj->updatedocente($id,$nombre,$estado);

echo "id:".$id." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

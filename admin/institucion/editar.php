<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_POST["idinstitucion"];
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("InstitucionCollector.php");
$InstitucionCollectorObj = new InstitucionCollector();
$InstitucionCollectorObj->updateInstitucion($id,$descripcion,$estado);

echo "id :".$id." actualizado a:".$descripcion." </br>";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

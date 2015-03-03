<?php
$id=$_POST["id"];
$anio=$_POST["anio"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("aniolectivoCollector.php");
$anio_lectivoCollectorObj = new aniolectivoCollector();
$anio_lectivoCollectorObj->updateanio_lectivo($id,$anio,$estado);

echo "id :".$id." actualizado a:".$anio." </br>";
?>
<div><a href="../index.php">Regresar adminitracio</a></div>
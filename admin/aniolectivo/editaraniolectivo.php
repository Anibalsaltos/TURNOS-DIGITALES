<?php
$ano_lectivo_id=$_POST["ano_lectivo_id"];
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("añolectivoCollector.php");
$ano_lectivoCollectorObj = new ano_lectivoaCollector();
$ano_lectivoCollectorObj->updateano_lectivo($ano_lectivo_id,$descripcion,$estado);

echo "id :".$ano_lectivo_id." actualizado a:".$nombre." </br>";
?>
<div><a href="formularioañolectivo.php">Regresar adminitracion de asignatura</a></div>
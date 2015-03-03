<?php
include_once("EncuestaCollector.php");
$EncuestaCollectorObj = new EncuestaCollector();
?>
<table>
<tr><td><a href="encuesta/formularioEncuestaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($EncuestaCollectorObj->readEncuestas() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdEncuesta() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='encuesta/formularioEncuestaEditar.php?id=".$c->getIdEncuesta()."'>editar</a></td>";
  echo "<td><a href='encuesta/eliminar.php?id=".$c->getIdEncuesta()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
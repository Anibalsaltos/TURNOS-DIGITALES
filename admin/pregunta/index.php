<?php
include_once("PreguntaCollector.php");
$PreguntaCollectorObj = new PreguntaCollector();
?>
<table>
<tr><td><a href="pregunta/formularioPreguntaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($PreguntaCollectorObj->readPreguntas() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdPregunta() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='pregunta/formularioPreguntaEditar.php?id=".$c->getIdPregunta()."'>editar</a></td>";
  echo "<td><a href='pregunta/eliminar.php?id=".$c->getIdPregunta()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
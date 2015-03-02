<?php
include_once("alumnoCollector.php");
$DemoCollectorObj = new alumnoCollector();
?>
<table>
<tr><td><a href="alumno/formularioalumnoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($DemoCollectorObj->readAlumnos() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdDemo() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='alumno/formularioalumnoEditar.php?id=".$c->getIdDemo()."'>editar</a></td>";
  echo "<td><a href='alumno/eliminar.php?id=".$c->getIdDemo()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
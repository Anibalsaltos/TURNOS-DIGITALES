<?php
include_once("alumnoCollector.php");
$DemoCollectorObj = new alumnoCollector();
?>
<table>
<tr><td><a href="alumno/formularioalumnoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($DemoCollectorObj->readAlumnos() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdalumno() ."</td>";
  echo "<td>".$c->getNombre1()."</td>";
  echo "<td>".$c->getNombre2()."</td>";
  echo "<td>".$c->getApellido1()."</td>";
  echo "<td>".$c->getApellido2()."</td>";
  echo "<td><a href='alumno/formularioalumnoEditar.php?id=".$c->getIdalumno()."'>editar</a></td>";
  echo "<td><a href='alumno/eliminar.php?id=".$c->getIdalumno()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
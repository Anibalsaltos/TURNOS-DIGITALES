<?php
include_once("DocenteCollector.php");
$DocenteCollectorObj = new DocenteCollector();
?>
<table>
<tr><td><a href="docente/formularioDocente.php">Nuevo</a></td></tr>
<?php
foreach ($DocenteCollectorObj->readdocentes() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdDocente() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  //echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='docente/formularioDocenteEditar.php?id=".$c->getIdDocente()."'>editar</a></td>";
  echo "<td><a href='docente/eliminarDocente.php?id=".$c->getIdDocente()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
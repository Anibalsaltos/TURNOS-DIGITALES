<?php
include_once("CitaCollector.php");
$citaCollectorObj = new CitaCollector();
?>
<table>
<tr><td><a href="citas/formularioCitaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($citaCollectorObj->readcitas() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdCita() ."</td>";
  echo "<td>".$c->getIdRepresentante()."</td>";
  echo "<td>".$c->getIdDocente()."</td>";
  echo "<td>".$c->getHora()."</td>";
  echo "<td>".$c->getDia()."</td>";
  //echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='citas/formularioCitaEditar.php?id=".$c->getIdCita()."'>editar</a></td>";
  echo "<td><a href='citas/eliminar.php?id=".$c->getIdCita()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
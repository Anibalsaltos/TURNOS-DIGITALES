
<?php
include_once("RepresentanteCollector.php");
$RepresentanteCollectorObj = new RepresentanteCollector();
?>
<table>
<tr><td><a href="representante/formularioRepresentanteInsert.php">Nuevo</a></td></tr>
<?php
foreach ($RepresentanteCollectorObj->readRepresentantes() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdRepresentante() ."</td>";
  echo "<td>".$c->getNombre1()."</td>";
  echo "<td>".$c->getNombre2()."</td>";
  echo "<td>".$c->getApellido1()."</td>";
  echo "<td>".$c->getApellido2()."</td>";
  echo "<td>".$c->getConvencional()."</td>";
  echo "<td>".$c->getMovil()."</td>";
  echo "<td>".$c->getDireccion()."</td>";
  echo "<td>".$c->getEmail()."</td>";
  echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='representante/formularioRepresentanteEditar.php?id=".$c->getIdRepresentante()."'>editar</a></td>";
  echo "<td><a href='representante/eliminar.php?id=".$c->getIdRepresentante()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
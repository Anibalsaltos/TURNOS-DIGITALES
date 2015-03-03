<?php
include_once("InstitucionCollector.php");
$InstitucionCollectorObj = new InstitucionCollector();
?>
<table>
<tr><td><a href="institucion/formularioInstitucionInsert.php">Nuevo</a></td></tr>
<?php
foreach ($InstitucionCollectorObj->readInstituciones() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdInstitucion() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='institucion/formularioInstitucionEditar.php?id=".$c->getIdInstitucion()."'>editar</a></td>";
  echo "<td><a href='institucion/eliminar.php?id=".$c->getIdInstitucion()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
<html>
<head>
</head>
<?php
include_once("DocenteCollector.php");
$DocenteCollectorObj = new DocenteCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDocente.php">Nuevo</a></td></tr>
<?php
foreach ($DocenteCollectorObj->readdocentes() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdDocente() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  //echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='formularioDocenteEditar.php?id=".$c->getIdDocente()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdDocente()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>

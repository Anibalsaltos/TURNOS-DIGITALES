<html>
<head>
	<head><title>Institucion</title></head>
</head>
<?php
include_once("InstitucionCollector.php");
$InstitucionCollectorObj = new InstitucionCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioInstitucionInsert.php">Nuevo</a></td></tr>
<?php
foreach ($InstitucionCollectorObj->readInstituciones() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdInstitucion() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getEstado()."</td>";
  echo "<td><a href='formularioInstitucionEditar.php?id=".$c->getIdInstitucion()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdInstitucion()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>

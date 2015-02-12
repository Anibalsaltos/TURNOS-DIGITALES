<html>
<head>
</head>
<?php
include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($DemoCollectorObj->readDemos() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdDemo() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdDemo()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdDemo()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>

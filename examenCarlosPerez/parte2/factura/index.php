<html>
<head>
	<meta charset="utf-8">
</head>

</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioFacturaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($FacturaCollectorObj->readFacturas() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdFactura() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getTotal()."</td>";
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>

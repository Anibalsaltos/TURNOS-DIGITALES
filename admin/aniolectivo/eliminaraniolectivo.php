<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Año Lectivo</title>
<body>
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("aniolectivoCollector.php");
//creo una instancia de alumnoCollector
$anio_lectivoCollectorObj = new aniolectivoCollector();
//Ejecuto el metodo para eliminar el objeto alumno indicando el id
$anio_lectivoCollectorObj->deleteanio_lectivo($id);

// muestro mensaje de que se ha eliminado el objeto alumno
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="../index.php">Regresar adminitracion</a></div>
</body>
</html>
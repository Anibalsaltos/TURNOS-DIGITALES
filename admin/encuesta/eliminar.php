<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de EncuestaCollector
include_once("EncuestaCollector.php");
//creo una instancia de EncuestaCollector
$EncuestaCollectorObj = new EncuestaCollector();
//Ejecuto el metodo para eliminar el objeto Encuesta indicando el id
$EncuestaCollectorObj->deleteEncuesta($id);

// muestro mensaje de que se ha eliminado el objeto Encuesta
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

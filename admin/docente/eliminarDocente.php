<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de usuarioCollector
include_once("docenteCollector.php");
//creo una instancia de usuarioCollector
$docenteCollectorObj = new docenteCollector();
//Ejecuto el metodo para eliminar el objeto docente indicando el id
$docenteCollectorObj->deletedocente($id);

// muestro mensaje de que se ha eliminado el objeto usuario
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

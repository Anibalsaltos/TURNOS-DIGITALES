<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de UsuarioCollector
include_once("../representante/Representante.php");
include_once("../representante/RepresentanteCollector.php");
include_once("UsuarioCollector.php");
include_once("Usuario.php");

//creo una instancia de UsuarioCollector



$UsuarioCollectorObj = new UsuarioCollector();
//Ejecuto el metodo para eliminar el objeto Usuario indicando el id
$ObjUsuario = $UsuarioCollectorObj->showUsuario($id);

echo $ObjUsuario->getIdRepresentante();



$objRepresentanteCollector = new RepresentanteCollector();
$objRepresentanteCollector->deleteRepresentante($ObjUsuario->getIdRepresentante());

$UsuarioCollectorObj->deleteUsuario($id);

echo "<p>Eliminado con exito</p>";
//
// muestro mensaje de que se ha eliminado el objeto Usuario
//echo "valor id: ". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

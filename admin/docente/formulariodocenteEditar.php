<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario docente</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("docenteCollector.php");
include_once("docente.php");
$docenteCollectorObj = new DocenteCollector();
$Objdocente = $docenteCollectorObj->showdocente($id);
?>
<h2>Editar Objeto docente </h2>
<form action="editarDocente.php" method="post" >
<p>

Id:
<input type="text" name="id" value="<?php echo $id ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $Objdocente->getNombre(); ?>" autofocus required />
</p>
Estado:
<input type="text" name="estado" value="<?php echo $Objdocente->getEstado(); ?>" required/>
<p>

</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

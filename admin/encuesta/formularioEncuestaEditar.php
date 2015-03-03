<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Encuesta</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("EncuestaCollector.php");
include_once("Encuesta.php");
$EncuestaCollectorObj = new EncuestaCollector();
$ObjEncuesta = $EncuestaCollectorObj->showEncuesta($id);
?>
<h2>Editar Objeto Encuesta </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idencuesta" value="<?php echo $ObjEncuesta->getIdEncuesta(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjEncuesta->getDescripcion(); ?>" autofocus required />
</p>

<p>
Estado:
 <!-- <input type="text" name="nombre"  value="<?php echo $ObjEncuesta->getEstado(); ?>" autofocus required /> -->

<select name="estado">


	<?php 
		if($ObjEncuesta->getEstado() == 0){
	 ?>
	<option value="0">Deshabilitado</option>
	<option value="1">Habilitado</option>
	<?php 
	} else{
	?>
	<option value="1">Habilitado</option>
	<option value="0">Deshabilitado</option>
	<?php } ?>
</select>
</p>




<a href="../index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

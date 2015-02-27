<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Pregunta</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("PreguntaCollector.php");
include_once("Pregunta.php");
$PreguntaCollectorObj = new PreguntaCollector();
$ObjPregunta = $PreguntaCollectorObj->showPregunta($id);
?>
<h2>Editar Objeto Pregunta </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idpregunta" value="<?php echo $ObjPregunta->getIdPregunta(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjPregunta->getDescripcion(); ?>" autofocus required />
</p>

<p>
Estado:
 <!-- <input type="text" name="nombre"  value="<?php echo $ObjPregunta->getEstado(); ?>" autofocus required /> -->

<select name="estado">


	<?php 
		if($ObjPregunta->getEstado() == 0){
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




<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

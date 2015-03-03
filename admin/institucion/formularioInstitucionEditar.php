<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Institucion</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("InstitucionCollector.php");
include_once("Institucion.php");
$InstitucionCollectorObj = new InstitucionCollector();
$ObjInstitucion = $InstitucionCollectorObj->showInstitucion($id);
?>
<h2>Editar Objeto Institucion </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idinstitucion" value="<?php echo $ObjInstitucion->getIdInstitucion(); ?>" readonly />
</p>
<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjInstitucion->getDescripcion(); ?>" autofocus required />
</p>
<p>
Estado: 
<select name="estado">
		<?php 
			if($ObjInstitucion->getEstado() == 0){
		 ?>
		<option value="0">Inactiva</option>
		<option value="1">Activo</option>
		<?php 
		} else{
		?>
		<option value="1">Activo</option>
		<option value="0">Inactiva</option>
		<?php } ?>

</select>
</p>

<a href="../index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

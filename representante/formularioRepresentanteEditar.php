<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Representante</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("RepresentanteCollector.php");
include_once("Representante.php");
$RepresentanteCollectorObj = new RepresentanteCollector();
$ObjRepresentante = $RepresentanteCollectorObj->showRepresentante($id);
?>
<h2>Editar Objeto Demo </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="id" value="<?php echo $ObjRepresentante->getIdRepresentante(); ?>" readonly />
</p>

<p>
PrimerNombre: <input type="text" name="nombre1"  value="<?php echo $ObjRepresentante->getNombre1(); ?>" autofocus required />
</p>
<p>
SegundoNombre: <input type="text" name="nombre2" value="<?php echo $ObjRepresentante->getNombre2(); ?>" required />
</p>
<p>
ApellidoMaterno: <input type="text" name="apellido1" value="<?php echo $ObjRepresentante->getApellido1(); ?>" required />
</p>
<p>
ApellidoPaterno: <input type="text" name="apellido2" value="<?php echo $ObjRepresentante->getApellido2(); ?>" required />
</p>
<p>
Convencional: <input type="tel" name="convencional" value="<?php echo $ObjRepresentante->getConvencional(); ?>" required />
</p>
<p>
Movil: <input type="tel" name="movil" value="<?php echo $ObjRepresentante->getMovil(); ?>" required />
</p>
<p>
Direccion: <input type="text" name="direccion" value="<?php echo $ObjRepresentante->getDireccion(); ?>" required />
</p>
<p>
email: <input type="email" name="correo" value="<?php echo $ObjRepresentante->getEmail(); ?>" required />
</p>
<p>
Estado: 
<select name="estado">
		<?php 
			if($ObjRepresentante->getEstado() == 0){
		 ?>
		<option value="0">Suspendido</option>
		<option value="1">Activo</option>
		<?php 
		} else{
		?>
		<option value="1">Activo</option>
		<option value="0">Suspendido</option>
		<?php } ?>

</select>
</p>



<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj = new UsuarioCollector();
$ObjUsuario = $UsuarioCollectorObj->showUsuario($id);
?>
<h2>Editar Objeto Usuario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idusuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
</p>

<p>
Usuario: <input type="text" name="usuario"  value="<?php echo $ObjUsuario->getUsuario(); ?>" readonly />
</p>

<p>
Contraseña: <input type="text" name="password"  value="<?php echo $ObjUsuario->getPassword(); ?>" required autofocus/>
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

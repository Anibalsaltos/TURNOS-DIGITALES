<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Año Lectivo</title>
<body>
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("aniolectivoCollector.php");
include_once("aniolectivoclase.php");
$anio_lectivoCollectorObj = new aniolectivoCollector();
$Objanio_lectivo = $anio_lectivoCollectorObj->showanio_lectivo($id);
?>
<h2>Editar asignatura</h2>
<form action="editaraniolectivo.php" method="post" >
<p>
Id: <input type="text" name="id" value="<?php echo $Objanio_lectivo->getAnioLectivo(); ?>" readonly />
</p>
<p>
AñoLectivo: <input type="text" name="anio"  value="<?php echo $Objanio_lectivo->getAnio(); ?>" autofocus required />
</p>
<p>
Estado: <input type="text" name="estado"  value="<?php echo $Objanio_lectivo->getEstado(); ?>" required />
</p>
<a href="../index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
</body>
</html>
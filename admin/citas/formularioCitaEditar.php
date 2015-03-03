<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Cita</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("CitaCollector.php");
include_once("Cita.php");
$CitaCollectorObj = new CitaCollector();
$ObjCita = $CitaCollectorObj->showcita($id);
?>
<h2>Editar Objeto Cita </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idCita" value="<?php echo $ObjCita->getIdCita(); ?>" readonly />
</p>
<p>
idRepresentante: <input type="text" name="idRepresentante"  value="<?php echo $ObjCita->getIdRepresentante(); ?>" readonly />
</p>
<p>
IdDocente: <input type="text" name="idDocente"  value="<?php echo $ObjCita->getIdDocente(); ?>" readonly />
</p>
<p>
Dia: <input type="text" name="dia"  value="<?php echo $ObjCita->getDia(); ?>" autofocus required />
</p>
<p>
Hora: <input type="text" name="hora"  value="<?php echo $ObjCita->getHora(); ?>" required />
</p>
<a href="../index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

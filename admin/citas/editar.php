<html>
<head>
</head>

<body>
<div id="main">
<?php
$idCita=$_POST["idCita"];
$idRepresentante=$_POST["idRepresentante"];
$idDocente=$_POST["idDocente"];
$dia = $_POST["dia"];
$hora = $_POST["hora"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("CitaCollector.php");
$CitaCollectorObj = new CitaCollector();
$CitaCollectorObj->updatecita($idCita,$idDocente,$idRepresentante,$hora,$dia);

//echo "id :".$iddemo." actualizado a:".$nombre." </br>";
echo "Cita editada";
?>
<div><a href="../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

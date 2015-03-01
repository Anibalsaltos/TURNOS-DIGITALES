<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Alumno</title>
<?php include 'metadatos.php'; ?>
<link href="css/ej.widgets.core.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jsrender.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.globalize.js" type="text/javascript"></script>
<script src="js/ej.widget.all.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container">
      <header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header visble-xs hidden-md hidden-sm hidden-lg">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img id="logo" src="img/logo.png" alt="CITE-MATICO"/> CITE - MATICO
            </a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <div class="navbar-left hidden-xs visible-md visible-sm visible-lg">
            <h1 class="titulo"><img id="logo" src="img/logo.png" alt="CITE-MATICO"/> CITE-MATICO</h1>
          </div>
          <nav id="navegacion">
          <ul class="nav navbar-nav navbar-right">
                <li class="le" ><a href="index.php">INICIO</a></li>
                <li class="le"><a  href="citas.php">CITAS</a></li>
                <li class="le"><a  href="encuestas.php">ENCUESTAS</a></li>
                <li class="dropdown">
                        <a href="#" id="activo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="le"><a id="activo" href="formularioalumno.php">Alumno</a></li>  
                          <li class="le"><a href="formularioasignatura.php">Asignatura</a></li>
                          <li class="le"><a href="formularioañolectivo.php">Año Lectivo</a></li>
                        </ul>
                      </li>
                <li class="cs"><a href="login.php">Cerrar Sesion</a></li>
            </ul>
            <ul class="usuario">
          <li>Bienvenido</li>
      </ul>
            
          </nav>
        </div>
      </div>
  </nav>
  </header>
<?php
$alumno_id=$_POST["alumno_id"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$convencional=$_POST["convencional"];
$movil=$_POST["movil"];
$direccion=$_POST["direccion"];
$email=$_POST["email"];
$estado=$_POST["estado"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("alumnoCollector.php");
$alumnoCollectorObj = new alumnoCollector();
$alumnoCollectorObj->updatealumno($alumno_id,$nombre1,$nombre2,$apellido1,$apellid2,$convencional,$movil,$direccion,$email,$estado);

echo "id :".$alumno_id." actualizado a:".$nombre." </br>";
?>
<div><a href="formularioalumno.php">Regresar adminitracion de alumnos</a></div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>
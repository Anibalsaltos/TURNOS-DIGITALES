<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Alumno</title>
<?php include '../metadatos.php'; ?>
<link href="../css/ej.widgets.core.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/jsrender.js" type="text/javascript"></script>
<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../js/jquery.globalize.js" type="text/javascript"></script>
<script src="../js/ej.widget.all.min.js" type="text/javascript"></script>
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
            <a class="navbar-brand" href="#"><img id="logo" src="../img/logo.png" alt="CITE-MATICO"/> CITE - MATICO
            </a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <div class="navbar-left hidden-xs visible-md visible-sm visible-lg">
            <h1 class="titulo"><img id="logo" src="../img/logo.png" alt="CITE-MATICO"/> CITE-MATICO</h1>
          </div>
          <nav id="navegacion">
          <ul class="nav navbar-nav navbar-right">
                <li class="le" ><a href="../index.php">INICIO</a></li>
                <li class="le"><a  href="../citas.php">CITAS</a></li>
                <li class="le"><a  href="../encuestas.php">ENCUESTAS</a></li>
                <li class="cs"><a href="../login.php">Cerrar Sesion</a></li>
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
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("alumnoCollector.php");
include_once("alumnoclase.php");
$alumnoCollectorObj = new alumnoCollector();
$Objalumno = $alumnoCollectorObj->showalumno($id);
?>
<h2>Editar alumno</h2>
<form action="editaralumno.php" method="post" >
<p>
Id: <input type="text" name="alumno_id" value="<?php echo $Objalumno->getalumno_id(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre1"  value="<?php echo $Objalumno->getnombre1(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="nombre2"  value="<?php echo $Objalumno->getnombre2(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="apellido1"  value="<?php echo $Objalumno->getapellido1(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="apellido2"  value="<?php echo $Objalumno->getapellido2(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="convencional"  value="<?php echo $Objalumno->getconvencional(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="movil"  value="<?php echo $Objalumno->getmovil(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="direccion"  value="<?php echo $Objalumno->getdireccion(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="email"  value="<?php echo $Objalumno->getemail(); ?>" autofocus required />
</p>
<p>
Nombre: <input type="text" name="estado"  value="<?php echo $Objalumno->getestado(); ?>" autofocus required />
</p>
<a href="formularioalumno.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

</body>
<?php include 'footer.php'; ?>
</html>
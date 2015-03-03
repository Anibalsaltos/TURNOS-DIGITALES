<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php'; ?>
		<link rel="stylesheet" href="css/horario.css"/>
	    <title>Cite-Matico Horario</title>
	</head>
<body>
	<div class="container">
		<?php 

		if(isset($_POST["idDocente"])){
			$id = $_POST["idDocente"];
			$_SESSION['idDocente'] = $id;
		}
		if(isset($_SESSION['idDocente'])){
			$id = $_SESSION['idDocente'];
		}
 ?>
		<!--Menu de navegacion-->
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
	            <li class="le" ><a id="activo" href="login.php">INICIO</a></li>
				<li class="le"><a  href="citas.php">CITAS</a></li>
				<li class="le"><a  href="encuestas.php">ENCUESTAS</a></li>
				<li class="cs"><a href="logout.php">Cerrar Sesión</a></li>
	            </ul>
	            <ul class="usuario">
			    <?php
        		// $_SESSION["usuario"]= $_POST['usuario'];
        		// echo "<a href='boostrap.php'> Volver </a>"; 
        		?>
				<?php echo "<li>Bienvenido, ".$_SESSION["usuario"]."</li>"?>
			</ul>
	        </nav>
		    </div>
	    </div>
	</nav>
	<!--Info adicional-->
	<?php 

	// $_SESSION['idRepresentante'] = $c->getIdRepresentante();
	 ?>
	<?php include 'info.php' ?>

	<?php


		if(isset($_POST['dia']) && (isset($_POST['hora']) && (isset($id)))){

			chdir('admin/citas');
			include_once("CitaCollector.php");

			$CitaCollector = new CitaCollector();
			$CitaCollector->createcita($id,$_SESSION['idRepresentante'],$_POST['hora'],$_POST['dia']);
	?>
	
	<section id="horario">
		
		<p class="exito">Cita creada con éxito.</p>

	</section>

	<?php
		}else{
	?> 

	<section class="hora">
		<form action="horario.php" method="post">
			
		
		<p>Seleccione el día:
			<select name="dia">
				<option value="Lunes">Lunes</option>
				<option value="Martes">Martes</option>
				<option value="Miércoles">Miércoles</option>
				<option value="Jueves">Jueves</option>
				<option value="Viernes">Viernes</option>
			</select>
		</p>
		<p>Seleccione la hora:
<select name="hora" id="">
	
			<option name="08:00">8 AM</option>
			<option name="09:00">9 AM</option>
			<option name="10:00">10 AM</option>
</select>
		</p>
		<input type="submit" value="Guardar Cita"/>
		</div>
		</form>
	</section>
	<?php } ?>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>

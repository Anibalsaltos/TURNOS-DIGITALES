<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'metadatos.php' ?>
	<title>Cite Matico - Actualizar</title>
	<script type="text/javascript">
		function guardar(){
			alert("Guardado con Exito");
		}
	</script>
</head>
<body>

	<div class="container">
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
	<?php include 'info.php' ?>
	<!--Formulario Usuario-->
	<div id="contact-form" class="row">
		<div class="col-lg-12">
		   <form method="get">  	    
		   <?php 

		   chdir('admin/representante');
		   include_once("RepresentanteCollector.php");
			$RepresentanteCollector = new RepresentanteCollector();
			$representante = $RepresentanteCollector->showRepresentante($_SESSION['idRepresentante']);
		    ?>     
		    <label for="nombre">Nombres: <span class="required">*</span></label>  
		    <input type="text" id="nombre" name="nombre" required="required" value="<?php echo $representante->getNombre1(); ?>"/>  

			<label for="apellido">Apellidos: <span class="required">*</span></label>  
		    <input type="text" id="apellido" name="apellido" required="required" value="<?php echo $representante->getApellido1(); ?>"/>  

		    <label for="direccion">Dirección: <span class="required">*</span></label>  
		    <input type="text" id="direccion" name="direccion" required="required" value="<?php echo $representante->getDireccion(); ?>" />  

		    <label for="celular">Celular: <span class="required">*</span></label>  
		    <input type="tel"  pattern="[0-9]{10}" id="celular" name="celular" required="required" value="<?php echo $representante->getMovil(); ?>"/>
		    <p id="tip"><span class="required">*</span> Datos obligatorios</p>     
	   		</form>
	   	</div>
	</div>
	<section class="botones">
		<div class="row">
			<div class="col-xs-6">
				<a href="login.php" class="boton" onclick="guardar();" >Guardar</a>
			</div>
			<div class="col-xs-6">
				<a href="login.php" class="boton">Cancelar</a>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>

</div>
	
</body>
</html>
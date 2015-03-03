<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'metadatos.php'; ?>
    <link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<title>Cite-Matico Inicio</title>
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
	              <li class="le" ><a id="activo" href="#">INICIO</a></li>
	              <li class="le"><a  href="citas.php">CITAS</a></li>
	              <li class="le"><a  href="encuestas.php">ENCUESTAS</a></li>

                      <!-- if (isset($_SESSION['nombre'])){
        				echo "<p>Hola usuario:(" . $_SESSION['nombre']. ") [<a href='logout.php'>Salir</a>]" ; -->
	              <li class="cs"><a href="logout.php">Cerrar Sesión</a></li>
	          </ul>
	          <ul class="usuario">
	          	 <!-- php -->
	          	<!-- //if(!isset($_SESSION)){ -->
        		<!-- //$_SESSION["usuario"]= $_POST["usuario"];} -->
        		<!-- /// echo "<a href='boostrap.php'> Volver </a>";  -->
        		<!-- // ?> -->
				<?php echo "<li>Bienvenido, ".$_SESSION["usuario"]."</li>"?>
			</ul>
	           
 	        </nav>
		    </div>
	    </div>
	</nav>
	</header>
	<!--Imagenes principales-->
	<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
	   			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  		</ol>
			<div class="carousel-inner">
			    <div class="item active">
			    <img src="img/c1.png" alt="" class="cntr"/>
			    <div class="carousel-caption"></div>
			    </div>
			    <div class="item"><img src="img/c2.png" alt="" class="cntr"/>
			    <div class="carousel-caption"></div>
			    </div>
			    <div class="item"><img src="img/c3.png" alt="" class="cntr"/>
			   	<div class="carousel-caption"></div>
			   	</div>
			</div>
			 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			  		<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
			  	</a>
		</div>
	</section>
	<!--Info adicional-->
	<?php include 'info.php' ?>
	<!--Formulario Usuario-->
	<section class="datos-user">

		<?php 
			chdir('admin/representante');

			include_once("RepresentanteCollector.php");
			$RepresentanteCollector = new RepresentanteCollector();
			$representante = $RepresentanteCollector->showRepresentante($_SESSION['idRepresentante']);

			echo "<div>Nombre : ".$representante->getNombre1()." ".$representante->getApellido1()."</div>";
			echo "<div>Email : ".$representante->getEmail()."</div>";
			echo "<div>Movil : ".$representante->getMovil()."</div>";
			echo "<div>Dirección : ".$representante->getDireccion()."</div>";

		 ?>
	</section>

	<!-- <div id="contact-form" class="row">
		<div class="col-lg-12">
		   <form method="get" action="emailForm.php">  	         
		    <label for="nombre">Nombres: <span class="required">*</span></label>  
		    <input type="text" disabled="disabled" id="nombre" name="nombre" required="required" value="Kevin Rafael"/>  

			<label for="apellido">Apellidos: <span class="required">*</span></label>  
		    <input type="text" disabled="disabled" id="apellido" name="apellido" required="required" value="Santacruz Burgos"/>  

		    <label for="direccion">Dirección: <span class="required">*</span></label>  
		    <input type="text" disabled="disabled" id="direccion" name="direccion" required="required" value="Francisco Jacome Mz 294 Solar 5" />  

		         
		    <label for="fechaNacimiento">Fecha Nacimiento: <span class="required">*</span></label>  
		    <input type="date" value="1994-02-18" id="nacimiento" name="nacimiento" required="required" />

		    <label for="celular">Celular: <span class="required">*</span></label>  
		    <input type="tel" disabled="disabled" pattern="[0-9]{10}" id="celular" name="celular" required="required" value="0981893287"/>
		    <p id="tip"><span class="required">*</span> Datos obligatorios</p>     
	   		</form>
	   	</div>
	</div> -->
	<section class="botones">
		<div class="row">
			<div class="col-xs-6">

				<form action="solicitud.php" method="POST">
					
					<input type="submit" class="boton" value="Solicitar Cita" name="<?php echo $representante->getIdRepresentante(); ?>">
				</form>
				
			</div>
			<div class="col-xs-6">
				<form action="actualizar.php" method="POST">
					
					<input type="submit" class="boton" value="Actualizar datos" name="<?php echo $representante->getIdRepresentante(); ?>">
				</form>
			</div>
		</div>
	</section>
	<!--<section class="botones">	
		<a href="solicitud.php" class="boton">Solicitar cita</a>
		<a href="actualizar.php" class="boton">Actualizar datos</a>
	</section>-->
	<?php include 'footer.php'; ?>
		</div>
	</body>
</html>

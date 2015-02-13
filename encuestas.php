<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php'; ?>
	    <title>Cite-Matico Encuestas</title>
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
	              <li class="le" ><a href="index.php">INICIO</a></li>
				<li class="le"><a  href="citas.php">CITAS</a></li>
				<li class="le"><a id="activo" href="#">ENCUESTAS</a></li>
	            </ul>
	        </nav>
		    </div>
	    </div>
	</nav>
	</header>

	<div id="cite" class="row">
		<div class="col-xs-12">
			<h2>Para mejorar constantemente nuestro servicio, por favor complete las encuestas presentadas a continuación.</h2>
			<ol id="datos">
				<li>Todos los campos oligatoriamente deben estar completos.</li>
				<li>La información proporcionada por usted debe ser verídica.</li>
				<li>Una vez finalizada la encuesta, haga clic sobre el botón enviar.</li>
			</ol>
		</div>
	</div>
	<!--Estado Encuestas-->
	<section class="encuestas">
	<div class="row">
		<div class="col-xs-12">
		<section class="encuesta">
			<span class="fecha">20-01-2015</span>
			<span class="nombre">Encuesta 2015</span>
			<span ><a href="#" class="enlace">www.encuesta.com</a></span>
			<span class="estado">CADUCADO</span>
		</section>
		</div>

		<div class="col-xs-12">
		<section class="encuesta">
			<span class="fecha">20-03-2015</span>
			<span class="nombre">Encuesta 2015</span>
			<span ><a href="#" class="enlace">www.encuesta.com</a></span>
			<span class="estado">DISPONIBLE</span>
		</section>
		</div>

		<div class="col-xs-12">
		<section class="encuesta">
			<span class="fecha">20-04-2015</span>
			<span class="nombre">Encuesta 2015</span>
			<span class="enlace"><a href="#" class="enlace">www.encuesta.com</a></span>
			<span class="estado">DISPONIBLE</span>
		</section>
		</div>

		<div class="col-xs-12">
		<section class="encuesta">
			<span class="fecha">20-05-2015</span>
			<span class="nombre">Encuesta 2015</span>
			<span class="enlace"><a href="#" class="enlace">www.encuesta.com</a></span>
			<span class="estado">DISPONIBLE</span>
		</section>
		</div>
	</div>
	</section>
	<?php include 'footer.php'; ?>
	</div>
</body>
</html>

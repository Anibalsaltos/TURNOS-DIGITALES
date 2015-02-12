<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php'; ?>
	    <title>Cite-Matico Encuestas</title>
	</head>
<body>
	<header>
		<img id="logo" src="img/logo.png" alt="CITE-MATICO"/>
		<h1 id="titulo">CITE - MATICO</h1>
		<nav id="navegacion">
			<ul>
				<li class="le" ><a href="index.php">INICIO</a></li>
				<li class="le"><a  href="citas.php">CITAS</a></li>
				<li class="le"><a id="activo" href="#">ENCUESTAS</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<div id="cite">
			<h2>Para mejorar constantemente nuestro servicio, por favor complete las encuestas presentadas a continuación.</h2>
			<ol id="datos">
				<li>Todos los campos oligatoriamente deben estar completos.</li>
				<li>La información proporcionada por usted debe ser verídica.</li>
				<li>Una vez finalizada la encuesta, haga clic sobre el botón enviar.</li>
			</ol>
		</div>
	</section>
	
	<section class="encuestas">
		<article class="encuesta">
			<time>20-01-2015</time>
			<em>Encuesta 2015</em>
			<a href="#" class="link">www.encuesta.com</a>
			<em class="dispo">DISPONIBLE</em>
		</article>
	<?php include 'footer.php'; ?>
</body>
</html>

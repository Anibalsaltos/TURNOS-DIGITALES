<!DOCTYPE html>
<html lang="es">
	<?Php  include 'metadatos.php' ; ?>
<body>
		<header>
		<img id="logo" src="../img/logo.png" alt="CITE-MATICO"/>
		<h1 id="titulo">CITE - MATICO</h1>
		<nav id="navegacion">
			<ul>
				<li id="le" ><a href="../index.html">INICIO</a></li>
				<li id="le"><a id="activo" href="citas.html">CITAS</a></li>
				<li id="le"><a  href="../pages/encuestas.html">ENCUESTAS</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<div id="cite">
			<h1>CITE-MATICO</h1>
			<h2>CITE-MATICO es un sistema que te permitirá realizar las siguientes actividades.</h2>
			<ol id="datos">
				<li>Solicitar una cita con el profesor que desee ser atendido/a.</li>
				<li>Observar las citaciones realizadas y futuras con su respectivas observaciones y recomendaciones.</li>
				<li>Realizar encuestas para ayudar a mejorar la atención de los maestros.</li>
			</ol>
		</div>
	</section>
	<h1 id="citaciones">LISTA DE CITACIONES</h1>
	<section id="citas">
		<table class="table">
			<tr class="tr" id="head">
				<td class="td">Fecha:</td>
				<td class="td">Docente:</td>
				<td class="td">Descripción:</td>
				<td class="td">Observaciones:</td>
			</tr>
			<tr class="tr">
				<td class="td">20/11/2014</td>
				<td class="td">Lic. Anibal Saltos J.</td>
				<td class="td">Académico - conductal</td>
				<td class="td"><img src=""/></td>
			</tr>
			<tr class="tr">
				<td class="td">15/11/2014</td>
				<td class="td">Lic. Joel Collahuazo</td>
				<td class="td">Conductal</td>
				<td class="td"><img src=""/></td>
			</tr>
			<tr class="tr">
				<td>15/11/2014</td>
				<td>Lic. Kevin Santacruz</td>
				<td>Novedades conductales</td>
				<td><img src=""/></td>
			</tr>
		</table>
	</section>

	<?php include_once("footer.php");?>
</body>
</html>

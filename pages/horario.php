<!DOCTYPE html>
<html lang="es">
	<?Php  include 'metadatos.php' ; ?>
<body>
		<header>
		<img id="logo" src="../img/logo.png" alt="CITE-MATICO"/>
		<h1 id="titulo">CITE - MATICO</h1>
		<nav id="navegacion">
			<ul>
				<li class="le" ><a id="activo" href="../index.php">INICIO</a></li>
				<li class="le"><a  href="../pages/citas.php">CITAS</a></li>
				<li class="le"><a  href="../pages/encuestas.php">ENCUESTAS</a></li>
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
	<section id="horario">
		<table>
			<tr>
				<td>Hora</td>
				<td>Lunes</td>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
			</tr>
			<tr>
				<td>08:15 - 09:15</td>
				<td></td>
				<td class="disponible"></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>09:15 - 10:15</td>
				<td></td>
				<td class="disponible"></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10:15 - 11:15</td>
				<td></td>
				<td></td>
				<td class="disponible"></td>
				<td></td>
				<td class="disponible"></td>
			</tr>
			<tr>
				<td>11:15 - 12:15</td>
				<td></td>
				<td></td>
				<td class="disponible"></td>
				<td></td>
				<td class="disponible"></td>
			</tr>
			<tr>
				<td>13:15 - 14:15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>14:15 - 15:15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>15:15 - 16:15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</section>

	<?php include 'footer.php' ; ?>
</body>
</html>

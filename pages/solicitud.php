<!DOCTYPE html>
<html lang="es">
<? Php  include_once ( " metadatos.php "); ?>
<body>
	<header>
		<img id="logo" src="../img/logo.png" alt="CITE-MATICO"/>
		<h1 id="titulo">CITE - MATICO</h1>
		<nav id="navegacion">
			<ul>
				<li id="le" ><a id="activo" href="../index.html">INICIO</a></li>
				<li id="le"><a  href="../pages/citas.html">CITAS</a></li>
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

	<section>
	<div id="contact-form"> 
	   <form method="post" action="emailForm.php">  
	      <label for="name">Seleccione el docente: <span class="required">*</span></label>
	      <select name="docente" id="subject">
	      	<option value="Kevin">Kevin Santacruz</option>
	      	<option value="Joel">Joel Collahuazo</option>
	      	<option value="Carlos">Carlos Julio Pérez</option>
	      	<option value="Cristian">Cristian Brunis</option>
	      	<option value="Anibal">Anibal Saltos</option>
	      </select>
	         
	      <label for="name">Nombres: <span class="required">*</span></label>  
	      <input type="text" id="nombre" name="nombre" value="" required="required" />  

		<label for="name">Apellidos: <span class="required">*</span></label>  
	      <input type="text" id="apellido" name="apellido" value="" required="required" />  

	      <label for="name">Cursos: <span class="required">*</span></label>  
	      <input type="text" id="curso" name="curso" value="" required="required" />  

	         
	       <label for="name">Asignaturas: <span class="required">*</span></label>  
	      <input type="text" id="asignatura" name="asignatura" value="" required="required" /> 

	      <label for="name">Celular: <span class="required">*</span></label>  
	      <input type="text" id="celular" name="celular" value="" required="required" />
	      <p id="tip"><span class="required">*</span> Datos obligatorios</p>
	         
   		</form>  
	</div>
	<section class="botones">
		<a href="horario.html" class="boton">Ver horario</a>
	</section>
	</section>
	<footer>
		<h1 class="foot">CITE-MATICO</h1>
		<span class="foot">Sistema de citas para atención de padres de familia</span>
		<h2 class="foot">EDCOM-ESPOL</h2>
	</footer>
</body>
</html>

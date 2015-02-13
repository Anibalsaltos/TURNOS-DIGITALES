<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'metadatos.php'; ?>
	<title>Solicitud de Cita</title>
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
	              <li class="le" ><a id="activo" href="index.php">INICIO</a></li>
				<li class="le"><a  href="citas.php">CITAS</a></li>
				<li class="le"><a  href="encuestas.php">ENCUESTAS</a></li>
	            </ul>
	        </nav>
		    </div>
	    </div>
	</nav>
	</header>
	<!--Info adicional-->
	<?php include 'info.php' ?>
	<!--Solicitud Cita-->
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
		<a href="horario.php" class="boton">Ver horario</a>
	</section>
	</section>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>

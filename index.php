<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link rel="stylesheet" href="css/estilo.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.jpg" />
    <link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<title>Cite-Matico Inicio</title>
</head>
<body class="container">
	<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<img id="logo" src="img/logo.png" alt="CITE-MATICO"/>
		<h1 id="titulo">CITE - MATICO</h1>
		<nav id="navegacion">
			<ul>
				<li id="le" ><a id="activo" href="index.html">INICIO</a></li>
                <li id="le"><a  href="pages/login.html">LOGIN</a></li>
				<li id="le"><a  href="pages/citas.html">CITAS</a></li>
				<li id="le"><a  href="pages/encuestas.html">ENCUESTAS</a></li>
			</ul>
		</nav>
	</header>
    
    <section>    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
    
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  			<!-- Indicators -->
  		<ol class="carousel-indicators">

   			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  		</ol>
  		<!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="img/c1.png" alt="Cita en linea" class="cntr"/>
		      <div class="carousel-caption">
		     
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/c2.png" alt="Consultas" class="cntr"/>
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/c3.png" alt="Encuestas" class="cntr"/>
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		    
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		  		    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
        		</div>
    </section>
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

	
	<section class="botones">
		<a href="pages/solicitud.html" class="boton">Solicitar cita</a>
		<a class="boton">Actualizar datos</a>
	</section>
	</section>
	<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="foot">CITE-MATICO</h1>
		<span class="foot">Sistema de citas para atención de padres de familia</span>
		<h2 class="foot">EDCOM-ESPOL</h2>
	</footer>
</body>
</html>
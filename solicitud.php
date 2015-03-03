<?php
session_start();
?>
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
	</header>
	<!--Info adicional-->
	<?php include 'info.php' ?>
	<!--Solicitud Cita-->
	<section>
	<div id="contact-form"> 
	<section class="botones">

	   <form method="post" action="horario.php">  
	      <label for="name">Seleccione el docente: <span class="required">*</span></label>
	<?php 

	      chdir('admin');
	include_once("docente/docente.php");
	include_once("docente/docenteCollector.php");
	$objDocenteCollector = new docenteCollector();
	
	 ?>
	<select name="idDocente">
		<?php 
			foreach ($objDocenteCollector->readDocentes() as $c) {
				
				// echo "<option value='".$c->getIdRepresentante()."'>".$c->getNombre1." ".$c->getApellido1."</option>";
				//echo "Id Representate: ".$c->getIdRepresentante();
				//value="<?php echo $ObjUsuario->getPassword();
				echo "<option value='".$c->getIdDocente()."'>".$c->getNombre()."</option>";

			}
		 ?>
	</select>


	      <!-- <select name="docente" id="subject">
	      	<option value="Kevin"><?php  ?></option>
	      	<option value="Joel">Joel Collahuazo</option>
	      	<option value="Carlos">Carlos Julio Pérez</option>
	      	<option value="Cristian">Cristian Brunis</option>
	      	<option value="Anibal">Anibal Saltos</option>
	      </select> -->
	         

	      <label for="name">Cursos: <span class="required">*</span></label>  
	      <?php 
	include_once("salon/Salon.php");
	include_once("salon/SalonCollector.php");
	$objSalonCollector = new SalonCollector();
	
	 ?>
	<select name="idSalon">
		<?php 
			foreach ($objSalonCollector->leerSalones() as $c) {
				
				// echo "<option value='".$c->getIdRepresentante()."'>".$c->getNombre1." ".$c->getApellido1."</option>";
				//echo "Id Representate: ".$c->getIdRepresentante();
				//value="<?php echo $ObjUsuario->getPassword();
				echo "<option value='".$c->getId()."'>".$c->getDescripcion()."</option>";

			}
		 ?>
	</select> 	         
		<input type="submit" value="Ver Horario"/>
	</section>
   		</form>  
	</div>
	</section>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>

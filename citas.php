<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php'; ?>
	    <title>Cite-Matico Citas</title>
	</head>
<body>
	<div class="container">
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
	             <li class="le" ><a href="login.php">INICIO</a></li>
				<li class="le"><a id="activo" href="#">CITAS</a></li>
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

	<!--Lista de las citas-->

	<div class="row">
		<div class="col-xs-12">
	<h1 id="citaciones">LISTA DE CITACIONES</h1>
		<section>
			<table class="table">
				<tr class="tr">
					<td class="td">Fecha:</td>
					<td class="td">Docente:</td>
					<td class="td">Descripción:</td>
					<td class="td">Observaciones:</td>
				</tr>
				<tr class="tr">
					<td class="td">20/11/2014</td>
					<td class="td">Lic. Anibal Saltos J.</td>
					<td class="td">Académico - conductal</td>
					<td class="td"></td>
				</tr>
				<tr class="tr">
					<td class="td">15/11/2014</td>
					<td class="td">Lic. Joel Collahuazo</td>
					<td class="td">Conductal</td>
					<td class="td"></td>
				</tr>
				<tr class="tr">
					<td>15/11/2014</td>
					<td>Lic. Kevin Santacruz</td>
					<td>Novedades conductales</td>
					<td></td>
				</tr>
			</table>
		</section>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>

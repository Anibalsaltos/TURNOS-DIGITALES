<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php'; ?>
		<link rel="stylesheet" href="css/horario.css"/>
	    <title>Cite-Matico Horario</title>
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
	<!--Info adicional-->
	<?php include 'info.php' ?>

	<section id="horario">
		<div class="table-responsive">
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
		</div>
	</section>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>

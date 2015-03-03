<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include 'metadatos.php' ?>
		<title>Cite Matico - Consultar Datos</title>
	</head>
	<body>
		<header class="navegacion">
			<nav class="navbar navbar-default" role="navigation">
			      	<h1 class="titulo"><img id="logo" src="img/logo.png" alt="CITE-MATICO"/> CITE-MATICO</h1>
			</nav>
		</div>
		</header>
		
		<section class="datos">

			<div>
				<h1>Docente</h1>
				<div><a href="docente/formularioDocente.php" class="nuevo">Crear Docente</a></div>
				<div class="salon">
					<h2>ID</h2>
					<h2>Nombre</h2>
					<h2>Estado</h2>
					<h2>Opciones</h2>
				</div>
				<?php 
					include_once("docente/docenteCollector.php");
					$DocenteCollectorObj = new DocenteCollector();
				?>
				<?php
				foreach ($DocenteCollectorObj->readdocentes() as $c){
					echo "<div class='datos-salon'>";
					echo "<div>".$c->getIdDocente() ."</div>";
					echo "<div>".$c->getNombre() ."</div>";
					echo "<div>".$c->getEstado() ."</div>";
					echo "<div><a href='docente/formularioDocenteEditar.php?id=".$c->getIdDocente()."'>Editar</a></div>";
					echo "<div><a href='docente/eliminarDocente.php?id=".$c->getIdDocente()."'>Eliminar</a></div>";
					echo "</div>";
				}
				 ?>
					
					
			</div>


			<div>
				<h1>Institucion</h1>
				<div><a href="#" class="nuevo">Nuevo</a></div>
				<div class="institucion">
					<h2>ID</h2>
					<h2>Descripcion</h2>
					<h2>Estado</h2>
					<h2>Opciones</h2>
				</div>
				<div class="datos-institucion">
					<div>1</div>
					<div>Institucion 1</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-institucion">
					<div>2</div>
					<div>Institucion 2</div>
					<div>1</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-institucion">
					<div>3</div>
					<div>Institucion 3</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
			</div>

			<div>
				<h1>Salon</h1>
				<div><a href="#" class="nuevo">Nuevo</a></div>
				<div class="salon">
					<h2>ID</h2>
					<h2>Descripcion</h2>
					<h2>Estado</h2>
					<h2>Opciones</h2>
				</div>
				<div class="datos-salon">
					<div>1</div>
					<div>Salon 1</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-salon">
					<div>2</div>
					<div>Salon 2</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-salon">
					<div>3</div>
					<div>Salon 3</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
			</div>

			<div>
				<h1>Representante</h1><div><a href="#" class="nuevo">Nuevo</a></div>	
				<div class="representante">
					<h2>ID</h2>
					<h2>Nombres</h2>
					<h2>Apelidos</h2>
					<h2>Convencional</h2>
					<h2>Celular</h2>
					<h2>Direccion</h2>
					<h2>Email</h2>
					<h2>Estado</h2>
					<h2>Opciones</h2>
				</div>
				<div class="datos-representante">
					<div>1</div>
					<div>Kevin</div>
					<div>Santacruz</div>
					<div>666666</div>
					<div>0981893287</div>
					<div>Francisco Jacome</div>
					<div>defonix0@gmail.com</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-representante">
					<div>2</div>
					<div>Joel</div>
					<div>Collahuazo</div>
					<div>1369</div>
					<div>0981893287</div>
					<div>Francisco Jacome</div>
					<div>jowpris@gmail.com</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
				<div class="datos-representante">
					<div>3</div>
					<div>Anibal</div>
					<div>Saltos</div>
					<div>222</div>
					<div>0981893287</div>
					<div>Francisco Jacome</div>
					<div>anibal@gmail.com</div>
					<div>0</div>
					<div><a href="#">Editar</a></div>
					<div><a href="#">Eliminar</a></div>
				</div>
			</div>
		</section>
	</body>	
</html>
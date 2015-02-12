<!DOCTYPE html>
<html lang="es">
	<head>
	    <?php include 'metadatos.php'; ?>
	    <title>Cite-Matico Login</title>
		<script>
			function mensaje() {
				//document.getElementById("demo").innerHTML = "Paragraph changed.";
				window.alert("Bienvenido al sistema...");
			}
		</script>
	</head>
	<body>
		<header>
	        <img id="logo" src="img/logo.png" alt="CITE-MATICO"/>
			<h1 id="titulo">CITE - MATICO</h1>
		</header>
		<section>
		
	</section>
		<section>
			<div id="contact-form" class="login">
 				<form method="get" action="login.php">

 					<label for="usuario">Usuario: </label>
					<input type="text" name="usuario" required placeholder="Ingrese su código de usuario">
					<label for="name">Clave: </label>
					<input type="password" name="clave" required placeholder="Ingrese su contraseña"> 

				</form>
			</div>
  			<section class="botones">
		            <a href="index.php" class="boton" onclick="mensaje();" >Ingresar</a>
			</section>

		</section>
		<?php include 'footer.php'; ?>
	</body>
</html>
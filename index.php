<?php session_start(); ?>
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

		<div class="container">
		<header>
			<div class="row">
				<div class="col-xs-12">
			        <img id="logo" src="img/logo.png" alt="CITE-MATICO"/>
					<h1 class="titulo-login">CITE - MATICO</h1>
				</div>
			</div>
		</header>
		<section>
		
	</section>
		<section>
			<div class="row">
				<div class="col-xs-12">
			<div id="contact-form" class="login">
 				<form method="POST" action="login.php">

 					<label for="usuario">Usuario: </label>
					<input type="text" name="usuario" required placeholder="Ingrese su código de usuario">
					<label for="name">Clave: </label>
					<input type="password" name="clave" required placeholder="Ingrese su contraseña"> 

			</div>
  			<section class="botones">
		            <!-- <a href="index.php" class="boton" onclick="mensaje();" >Ingresar</a> -->
		            <input type="submit" value="Ingresar" class="boton" onclick="mensaje();"/>
			</section>
				</form>
			</div>
		</div>
		</section>
		<?php include 'footer.php'; ?>
	</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="es">
	<head>
	        <meta charset="UTF-8">
	        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
            <link rel="shortcut icon" type="image/x-icon" href="../img/icono.jpg" />

	        <link rel="stylesheet" href="../css/bootstrap.css">
	        <link rel="stylesheet" href="../css/estilo.css"/>
	        <title>Ingreso al sistema</title>

		<script>
			function mensaje() {
				//document.getElementById("demo").innerHTML = "Paragraph changed.";
				window.alert("Bienvenido al sistema...");
			}
		</script>
	</head>
	<body>
		<header>
	        <img id="logo" src="../img/logo.png" alt="CITE-MATICO"/>
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
		            <a href="../index.html" class="boton" onclick="mensaje();" >Ingresar</a>
			</section>

		</section>

		<footer>
			<h1 class="foot">CITE-MATICO</h1>
			<span class="foot">Sistema de citas para atención de padres de familia</span>
			<h2 class="foot">EDCOM-ESPOL</h2>
		</footer>
	</body>
</html>
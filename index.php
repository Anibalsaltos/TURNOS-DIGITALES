<?php 
chdir('admin/usuario');
include_once ("admin/usuario/UsuarioCollector.php");
session_start();
$UsuarioCollectorObj = new UsuarioCollector();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	    <?php include 'metadatos.php'; ?>
	    <title>Cite-Matico Login</title>
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
 				<form method="POST" action="index.php">

 					<label for="usuario">Usuario: </label>
					<input type="text" name="usuario" required placeholder="Ingrese su código de usuario">
					<label for="name">Clave: </label>
					<input type="password" name="clave" required placeholder="Ingrese su contraseña"> 

			</div>
  			<section class="botones">
		            <!-- <a href="index.php" class="boton" onclick="mensaje();" >Ingresar</a> -->

		            <?php 

						$usuarioValido = 0;
						foreach ($UsuarioCollectorObj->readUsuarios() as $c){
						if(isset($_POST['usuario']) and (isset($_POST['clave']))){

							if( $_POST['usuario']== $c->getUsuario() && $_POST['clave'] == $c->getPassword()){
							$_SESSION['actualmente_ingresado'] = 1;
							$_SESSION['usuario'] = $c->getUsuario();
							$_SESSION['idRepresentante'] = $c->getIdRepresentante();
							$usuarioValido=1;
						}
					}
					}
		             ?>

		            <?php
						if(isset($_SESSION['idRepresentante'])){
 					 		header('Location: login.php');
						}
					?> 
		            <input type="submit" value="Ingresar" class="boton"/>
			</section>
				</form>
			</div>
		</div>
		</section>
		<?php include 'footer.php'; ?>
	</div>
	</body>
	
</html>
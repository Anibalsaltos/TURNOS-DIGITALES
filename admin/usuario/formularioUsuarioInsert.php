<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>
	<?php 
	include_once("../representante/Representante.php");
	include_once("../representante/RepresentanteCollector.php");
	$objRepresentanteCollector = new RepresentanteCollector();
	$representantes = $objRepresentanteCollector->readRepresentantes();
	 ?>
<form action="insert.php" method="post" >
<p>
Usuario: <input type="text" name="usuario" autofocus required />
</p>
<p>
Contraseña: <input type="text" name="password" />
</p>
<p>
	Representante:
	<select name="idRepresentante">
		<?php 
			foreach ($representantes as $c) {
				
				// echo "<option value='".$c->getIdRepresentante()."'>".$c->getNombre1." ".$c->getApellido1."</option>";
				//echo "Id Representate: ".$c->getIdRepresentante();
				//value="<?php echo $ObjUsuario->getPassword();
				echo "<option value='".$c->getIdRepresentante()."'>".$c->getNombre1()." ".$c->getApellido1()."</option>";

			}
		 ?>
	</select>
</p>
<input type="submit" value="Submit!" />

</form>

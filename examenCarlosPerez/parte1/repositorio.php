<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Lección PHP: Formulario, por Carlos Julio Pérez</title>
	</head>

	<?php
		$nombre	 	= $_POST['nombre'];	
		$ruc	 	= $_POST['ruc'];
		$cantidad 	= $_POST['cantidad'];
		$precio 	= $_POST['precio'];
		
		$subtotal = $precio * $cantidad;
		$iva = $subtotal * 0.12;
		$total = $subtotal + $iva;
		
		echo "Nombre: " . $nombre . "<br>";
		echo "RUC: " . $ruc . "<br>";
		echo "Cantidad : " . $cantidad . "<br>";
		echo "Precio : " . $precio . "<br>";
		echo "Subtotal : " . $subtotal . "<br>";
		echo "IVA : " . $iva . "<br>";
		echo "TOTAL : " . $total . "<br>";
	?>

</html>

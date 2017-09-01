<?php
	$destino = "kavayero_lanlibra@hotmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
	mail($destino, "contacto", $contenido);
	echo "Mensaje enviado";
	header("Location:index.html");




?>

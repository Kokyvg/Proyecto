<?php
	$destino = "kokyvg@gmail.com";
	$nombre= $_POST["nombre"];
	$apellidos= $_POST["apellidos"];
	$correo= $_POST["email"];
	$comensales= $_POST["comensales"];
	$comentarios= $_POST["comentarios"];
	$total= "Nombre: " . $nombre . "\nApellidos " . $apellidos . "\nCorreo: " . $correo . "\nComensales: " 
	. $comensales . "\nComentarios: " . $comentarios;
	mail($destino, "reserva", $total);
	header('Location: Gracias.php');
?>
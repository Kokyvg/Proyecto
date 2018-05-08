<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if($varsesion == null || $varsesion = ''){
		echo 'No tienes autorizacion.';
		die();
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel</title>
</head>
<body>
	<h1>EL PANEL</h1>
	<a href="cerrarsesion.php">Cerrar sesion!</a>
</body>
</html>
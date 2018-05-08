<?php
	session_start();
	error_reporting(0);

	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = ''){
		echo 'No tienes autorizacion.';
		die();
	}

	session_destroy();
	header("Location:Logueo.html");

?>
<?php
	$server = "localhost";
	$user = "root";
	$password = "";//ponjhjer tu propia contraseña, si tienes una.
	$bd = "master_rollout";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	
?>


<?php
	require 'aconfig/core.php';

	$conexion = new AConexion();

	$id = $_GET['id'];

	$sql = $conexion->query("SELECT password,email,nombre,apellido FROM usuarios WHERE id_usuario='$id'");
	$data = $conexion->recorrer($sql);
	$password = $data[0];
	$email= $data[1];
	$nombre = $data[2];
	$apellido= $data[3];
	$conexion->liberar($sql);
	$conexion->close();
?>

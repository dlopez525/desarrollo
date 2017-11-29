<?php
	require 'aconfig/core.php';

	$conexion = new AConexion();

	$id = $_GET['id'];

	$sql = $conexion->query("SELECT id_menu,menu,precio,imagen FROM menu WHERE id_menu='$id'");
	$data = $conexion->recorrer($sql);
	$id = $data[0];
	$menu= $data[1];
	$precio = $data[2];
	$imagen = $data[3];
	$conexion->liberar($sql);
	$conexion->close();
?>

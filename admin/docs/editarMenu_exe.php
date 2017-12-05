<?php
	require 'aconfig/core.php';

	$conexion = new AConexion();

	$id = $_GET['id'];

	$sql = $conexion->query("SELECT id_menu,menu,descripcion,fecha,precio,imagen FROM menu WHERE id_menu='$id'");
	$data = $conexion->recorrer($sql);
	$id = $data[0];
	$menu= $data[1];
	$descripcion = $data[2];
	$fecha = $data[3];
	$precio = $data[4];
	$imagen = $data[5];
	$conexion->liberar($sql);
	$conexion->close();
?>

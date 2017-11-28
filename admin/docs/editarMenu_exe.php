<?php
	require 'config/core.php';

	$conexion = new Conexion();

	$id = $_GET['id'];

	$sql = $conexion->query("SELECT id_menu,menu,precio FROM menu WHERE id_menu='$id'");
	$data = $conexion->recorrer($sql);
	$id = $data[0];
	$menu= $data[1];
	$precio = $data[2];
?>

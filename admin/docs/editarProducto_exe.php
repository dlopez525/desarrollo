<?php
	require '../config/core.php';

	$conexion = new Conexion();

	$id = $_GET['id'];

	$sql = $conexion->query("SELECT producto,categoria,stock,precio FROM productos WHERE id_producto='$id'");
	$data = $conexion->recorrer($sql);
	$producto = $data[0];
	$categoria= $data[1];
	$stock = $data[2];
	$precio= $data[3];
?>

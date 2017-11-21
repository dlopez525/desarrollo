<?php
	require '../../config/core.php';
	$conexion = new Conexion();

$id = $_GET['id'];

	$producto= $_POST['producto'];
	$categoria=$_POST['categoria'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];

	if (isset($_POST['actualizarProducto_btn'])) {
		$conexion->query("UPDATE productos SET producto='$producto',categoria='$categoria',precio='$precio',stock='$stock' WHERE id_producto = '$id';");
		}

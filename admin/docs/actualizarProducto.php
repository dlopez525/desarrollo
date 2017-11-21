<?php
	require '../config/core.php';
	$conexion = new Conexion();


	$producto= $_POST['producto'];
	$categoria=$_POST['categoria'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$id = $_POST['id'];

	if (isset($_POST['actualizarProducto_btn'])) {
		$conexion->query("UPDATE productos SET producto='$producto',categoria='$categoria',precio='$precio',stock='$stock' WHERE id_producto = '$id';");
		}

header("location: ../productos.php");
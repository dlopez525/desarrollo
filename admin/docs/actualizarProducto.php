<?php
	require '../aconfig/core.php';
	$conexion = new AConexion();


	$producto= $_POST['producto'];
	$categoria=$_POST['categoria'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$id = $_POST['id'];

	if (isset($_POST['actualizarProducto_btn'])) {
		$conexion->query("UPDATE productos SET producto='$producto',categoria='$categoria',precio='$precio',stock='$stock' WHERE id_producto = '$id';");
		}
$conexion->close();
header("location: ../productos.php?msg=1");

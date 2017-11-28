<?php
	require '../config/core.php';
	$conexion = new Conexion();

	$menu = $_POST['menu'];
	$precio = $_POST['precio'];
	$id = $_POST['id_menu'];

	if (isset($_POST['actualizarMenu_btn'])) {
		$conexion->query("UPDATE menu SET menu='$menu',precio='$precio' WHERE id_menu = '$id';");
		}

header("location: ../menus.php?msg=1");

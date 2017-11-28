<?php
	require '../config/core.php';
	$conexion = new Conexion();


	$producto= $_POST['menu'];
	$precio = $_POST['precio'];
	$id = $_POST['id'];

	if (isset($_POST['actualizarMenu_btn'])) {
		$conexion->query("UPDATE menu SET menu='$menu',precio='$precio' WHERE id_menu = '$id';");
		}

header("location: ../menus.php");
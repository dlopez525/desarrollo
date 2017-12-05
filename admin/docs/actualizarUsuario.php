<?php
	require '../aconfig/core.php';
	$conexion = new AConexion();


 	$nombre = $_POST['nombre'];
 	$apellido = $_POST['apellido'];
 	$password = $_POST['password'];
 	$email = $_POST['email'];
	$id = $_POST['id'];

	if (isset($_POST['actualizarTrabajador_btn'])) {
		$conexion->query("UPDATE usuarios SET nombre='$nombre',apellido='$apellido',password='$password',email='$email' WHERE id_usuario = '$id';");
		}
$conexion->close();
header("location: ../Usuario.php");

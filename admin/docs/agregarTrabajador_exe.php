<?php
	require '../aconfig/core.php';

 	$conexion = new AConexion();

 	$nombre = $_POST['nombre_txt'];
 	$apellido = $_POST['apellido_txt'];
 	$password = $_POST['password_txt'];
 	$email = $_POST['email_txt'];


 	if (isset($_POST['agregar_btn'])){


 		$conexion->query("INSERT INTO usuarios (password,email,nombre,apellido,id_tipoUsuario, id_tipoCuenta,cuenta) VALUES ('$password','$email','$nombre','$apellido',3,1,'Enabled');");

 		header("location: ../trabajadores.php");


 	}
 ?>

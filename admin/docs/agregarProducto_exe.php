<?php
	include '../aconfig/core.php';

 	$conexion = new AConexion();

 	$producto = $_POST['producto_txt'];
 	$categoria = $_POST['categoria_slc'];
 	$precio = $_POST['precio_txt'];
 	$stock = $_POST['stock_txt'];


 	if (isset($_POST['agregar_btn'])){

 		// $nombreImg = $_FILES['imagen_fls']['tmp_name'];
 		// $nombreNImg = $_FILES['imagen_fls']['name'];
 		// $ruta="img/public/".$nombreNImg;
 		// $ff = "../../img/public/";

 		$conexion->query("INSERT INTO productos (producto,categoria,stock,precio) VALUES ('$producto','$categoria','$stock','$precio');");

 		// move_uploaded_file($nombreImg, "$ff/$nombreNImg");

		$conexion->close();
 		header("location: ../productos.php");

 	}
 ?>

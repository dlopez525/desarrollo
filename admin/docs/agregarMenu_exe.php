<?php
	include '../config/core.php';

 	$conexion = new Conexion();

 	$menu = $_POST['menu_txt'];
 	$precio = $_POST['precio_txt'];


 	if (isset($_POST['agregarMenu_btn'])){

 		// $nombreImg = $_FILES['imagen_fls']['tmp_name'];
 		// $nombreNImg = $_FILES['imagen_fls']['name'];
 		// $ruta="img/public/".$nombreNImg;
 		// $ff = "../../img/public/";

 		$conexion->query("INSERT INTO menu (menu,precio) VALUES ('$menu','$precio');");

 		// move_uploaded_file($nombreImg, "$ff/$nombreNImg");


 		header("location: ../menus.php");

 	}
 ?>

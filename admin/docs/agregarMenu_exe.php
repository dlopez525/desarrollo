<?php
	include '../aconfig/core.php';

 	$conexion = new AConexion();

 	$menu = $_POST['menu_txt'];
 	$precio = $_POST['precio_txt'];


 	if (isset($_POST['agregarMenu_btn'])){

		//Se ejecuta la funcion para subir la imagen
		$tipo = $_FILES["imagen_fls"]["type"];
		$archivo = $_FILES["imagen_fls"]["tmp_name"];
		$se_subio_imagen = subir_imagen_menu($tipo,$archivo,$menu);

		//Si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen genérica, sino entonces el nombre de la foto que se subio.
		$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

 		$conexion->query("INSERT INTO menu (menu,precio,imagen) VALUES ('$menu','$precio','$imagen');");

		$conexion->close();
 		header("location: ../menus.php");
 	}
 ?>

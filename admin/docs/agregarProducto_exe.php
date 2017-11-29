<?php
	include '../aconfig/core.php';

 	$conexion = new AConexion();

 	$producto = $_POST['producto_txt'];
 	$categoria = $_POST['categoria_slc'];
 	$precio = $_POST['precio_txt'];
 	$stock = $_POST['stock_txt'];


 	if (isset($_POST['agregar_btn'])){

		//Se ejecuta la funcion para subir la imagen
		$tipo = $_FILES["imagen_fls"]["type"];
		$archivo = $_FILES["imagen_fls"]["tmp_name"];
		$se_subio_imagen = subir_imagen($tipo,$archivo,$producto);

		//Si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen genérica, sino entonces el nombre de la foto que se subio.
		$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

 		$conexion->query("INSERT INTO productos (producto,categoria,stock,precio,imagen) VALUES ('$producto','$categoria','$stock','$precio','$imagen');");

		$conexion->close();
 		header("location: ../productos.php");

 	}
 ?>

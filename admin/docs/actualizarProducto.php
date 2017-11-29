<?php
	require '../aconfig/core.php';
	$conexion = new AConexion();


	$producto= $_POST['producto'];
	$categoria=$_POST['categoria'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$id = $_POST['id'];

	if (isset($_POST['actualizarProducto_btn'])) {

		//Se ejecuta la funcion para subir la imagen
		$tipo = $_FILES["imagen_fls"]["type"];
		$archivo = $_FILES["imagen_fls"]["tmp_name"];
		$se_subio_imagen = subir_imagen($tipo,$archivo,$producto);

		//Si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen genérica, sino entonces el nombre de la foto que se subio.
		$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

		$conexion->query("UPDATE productos SET producto='$producto',categoria='$categoria',precio='$precio',stock='$stock',imagen='$imagen' WHERE id_producto = '$id';");
		}
$conexion->close();
header("location: ../productos.php?msg=1");
?>

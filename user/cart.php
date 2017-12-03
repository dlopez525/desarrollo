<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
</head>
<body>
	<header>
		<img src="./imagenes/logo.png" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];

			$total=0;
			for($i=0;$i<count($datos);$i++){

	?>
				<div class="producto">
					<center>
						<img src="../views/img/productos/<?php echo $datos[$i]['Imagen'];?>"><br>
						<span ><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad:
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
			echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			echo '<a href="models/confCompra.php">Confirmar Compra</a>';
			}else{
				if (isset($_GET['cod'])) {
					$cod = $_GET['cod'];
					$mensaje = "La compra se realizó correctamente.<br> Tu código de Compra es: {$cod}. <br> Necesitas Presentar este codigo para recoger tu pedido";
					echo $mensaje;
				} elseif (isset($_GET['err'])) {
					echo "Algo salio mal, vuelve a intentarlo";
				} else {
					echo '<center><h2>No has añadido ningun producto</h2></center>';
				}

			}
?>
	</section>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="../views/js/cart.js"></script>
</body>
</html>

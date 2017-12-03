<?php include 'overall/head.php'; ?>
<body class="grayBG">
	<?php include 'overall/header.php'; ?>
 <?php include 'overall/menu.php'; ?>
 <div id="productos">
			 <div class="productos">
 <?php
 	$total=0;
 	if(isset($_SESSION['menu'])){
 	$datos=$_SESSION['menu'];

 	$total=0;
 	for($i=0;$i<count($datos);$i++){

 ?>

          <div class="productos__item">
                <div class="productos__item__img">
                    <img src="../views/img/menus/<?php echo $datos[$i]['Imagen'];?>" alt="">
                </div>
                <div class="productos__item__details">
                    <p class="productos__item__details__titulo"><?php echo $datos[$i]['Nombre'];?></p>
                    <p class="productos__item__details__price"><?php echo $datos[$i]['Precio'];?></p>
										<input type="text" class="productos__item__details__cant cantidad" value="<?php echo $datos[$i]['Cantidad'];?>" data-precio="<?php echo $datos[$i]['Precio'];?>" data-id="<?php echo $datos[$i]['Id'];?>"
										>
                    <p class="productos__item__details__subtotal">Subtotal: <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></p>
                    <div class="productos__item__details__btnCant">
                        <a href="#" data-id="<?php echo $datos[$i]['Id']?>" class="productos__item__details__del"><i class="icon-ios-close-empty"></i></a>
                    </div>
                </div>
            </div>
		<?php
			$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
		}
		?>
	</div>
</div>
		<?php
		echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			echo "<div id='totalCarrito' class='totalCarrito'>
	        <div class='totalCarrito__cart'>
	            <p>Total</p>
	            <p id='totalCarrito__item'>S/.".$total."</p>
	        </div>
					<div class='totalCarrito__conf'>
			            <a href='models/confCompraM.php'>Confirmar Compra</a>
			        </div>
			    </div>";
		}else{
			if (isset($_GET['cod'])) {
				$cod = $_GET['cod'];
				$mensaje = "<div class='confCompra'><div class='confCompra__item'><p>La compra se realizó correctamente.</p><p>Tu código de Compra es: <span>{$cod}</span>.</p><p>Necesitas Presentar este codigo para recoger tu pedido.</p></div></div>";
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
	<script src="../views/js/script.js"></script>
	<script src="../views/js/cartM.js"></script>
</body>
</html>

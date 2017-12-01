<?php
  $conexion = new Conexion();

  $sql = "SELECT id_producto,producto,categoria,precio,imagen FROM productos WHERE categoria = 'golosinas'" ;
  $resultado = $conexion->query($sql);
  $fila = mysqli_fetch_assoc($resultado);
  $total = $conexion->rows($resultado);

if ($total>0) { ?>
  <?php do { ?>
     <div class="productos__item">
                <div class="productos__item__img">
                    <img src="<?php echo $fila['producto'];?>" alt="">
                </div>
                <div class="productos__item__details">
                    <p class="productos__item__details__titulo"><?php echo $fila['producto'];?></p>
                    <p class="productos__item__details__cate"><?php echo $fila['categoria'];?></p>
                    <p class="productos__item__details__price"><?php echo $fila['precio'];?></p>
                    <button class="productos__item__details__add"><i class="icon-ios-cart-outline"></i></button>
                </div>
            </div>
  <?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
$conexion->liberar($resultado);
$conexion->close();
 ?>

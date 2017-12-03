<?php
  $conexion = new Conexion();
  $now = date("d")."-".date("m")."-".date("Y");

  $sql = "SELECT id_menu,menu,descripcion,precio,imagen FROM menu WHERE fecha = '$now'" ;
  $resultado = $conexion->query($sql);
  $fila = mysqli_fetch_assoc($resultado);
  $total = $conexion->rows($resultado);

if ($total>0) { ?>
  <?php do { ?>
     <div class="productos__item">
                <div class="productos__item__img">
                    <img src="../views/img/menus/<?php echo $fila['imagen'];?>" alt="">
                </div>
                <div class="productos__item__details">
                    <p class="productos__item__details__titulo"><?php echo $fila['menu'];?></p>
                    <p class="productos__item__details__cate"><?php echo $fila['descripcion'];?></p>
                    <p class="productos__item__details__price"><?php echo $fila['precio'];?></p>
                    <a href="models/cartM.php?id=<?php echo $fila['id_menu'];?>" class="productos__item__details__add"><i class="icon-ios-cart-outline"></i></a>
                </div>
            </div>
  <?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
$conexion->liberar($resultado);
$conexion->close();
 ?>

<?php
  $conexion = new Conexion();

  $idUser = $_SESSION['app_id'];

  $sql = "SELECT id_usuario,codigoPedido,fecha,total,estado FROM pedido WHERE id_usuario='$idUser';";
  $resultado = $conexion->query($sql);
	$fila = mysqli_fetch_assoc($resultado);
	$total = $conexion->rows($resultado);

  if ($total>0) { ?>
  	<?php do { ?>
         <div class="compras__item">
              <div class="compras__item__header">
                  <p>Codigo de Compra: <span><?php echo $fila['codigoPedido']; ?></span></p>
                  <p class="estado">Estado: <span><?php echo $fila['estado']; ?></span></p>
                  <p>Fecha de Compra: <span><?php echo $fila['fecha']; ?></span></p>
                  <p>Total: <span>S/.<?php echo $fila['total']; ?></span></p>
                  <div class="compras__item__footer">
                      <a href="docs/cancelarCompra_exe.php?comp=<?php echo $fila['codigoPedido']; ?>" class="compras__item__footer__link">Cancelar Compra</a>
                  </div>
              </div>
          </div>

  	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
  <?php }
  $conexion->liberar($resultado);
  $conexion->close();
 ?>

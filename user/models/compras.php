<?php
  $conexion = new Conexion();

  $idUser = $_SESSION['app_id'];

  $sql = "SELECT codigoPedido FROM detalle_pedido WHERE id_usuario='$idUser' LIMIT 1;";
  $resultado = $conexion->query($sql);
	$fila = mysqli_fetch_assoc($resultado);
	$total = $conexion->rows($resultado);
  if ($total>0) { ?>
  	<?php do { ?>
  		          <div class="compras__item">
                   <div class="compras__item__header">
                       <p>Codigo de Compra: <span><?php echo $fila['codigoPedido'];?></span></p>
                       <p class="estado">Estado: <span>Pendiente</span></p>
                       <p>Fecha de Compra: <span>03-12-2017</span></p>
                   </div>
                   <div class="compras__item__footer">
                       <a href="#" class="compras__item__footer__link">Cancelar Compra</a>
                   </div>
              </div>
  	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
  <?php }
  $conexion->liberar($resultado);
  $conexion->close();


  // $sql = $conexion->query("");
  // $data = $conexion->recorrer($sql);
  // $id = $data[0];
  // $codigoPedido = $data[1];
  // $cantidad = $data[2];
  // $fecha = $data[3];
  // $subtotal = $data[4];
  // $estado = $data[5];
  // $producto = $data[6];
 ?>
 <!-- <div class="compras__item">
      <div class="compras__item__header">
          <p>Codigo de Compra: <span>PED_DFDF4</span></p>
          <p class="estado">Estado: <span>Pendiente</span></p>
          <p>Fecha de Compra: <span>03-12-2017</span></p>
      </div>

      <div class="compras__item__body">
          <table border="1">
              <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Age</th>
              </tr>
              <tr>
                  <td>Jill</td>
                  <td>Smith</td>
                  <td>50</td>
              </tr>
              <tr>
                  <td>Eve</td>
                  <td>Jackson</td>
                  <td>94</td>
              </tr>
              <tr>
                  <td colspan="2">Total</td>
                  <td>500.00</td>
              </tr>
          </table>
      </div>

      <div class="compras__item__footer">
          <a href="#" class="compras__item__footer__link">Cancelar Compra</a>
      </div>
 </div> -->

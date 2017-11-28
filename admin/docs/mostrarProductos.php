<?php
  $conexion = new AConexion();

  $sql = "SELECT id_producto,producto,categoria,stock,precio FROM productos";
  $resultado = $conexion->query($sql);
	$fila = mysqli_fetch_assoc($resultado);
	$total = $conexion->rows($resultado);

if ($total>0) { ?>
	<?php do { ?>
		<tr>
            <td><?php echo $fila['id_producto']; ?></td>
            <td><?php echo $fila['producto']; ?></td>
            <td><?php echo $fila['categoria']; ?></td>
            <td><?php echo $fila['stock']; ?></td>
            <td><?php echo $fila['precio']; ?></td>
            <td><a href="editarProducto.php?id=<?php  echo $fila['id_producto'];?>">editar</a></td>
            <td><a href="docs/eliminar.php?id=<?php  echo $fila['id_producto'];?>">eliminar</a></td>
        </tr>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
$conexion->liberar($resultado);
$conexion->close();
 ?>

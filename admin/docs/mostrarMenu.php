<?php

  $conexion = new AConexion();

  $sql = "SELECT id_menu,menu,precio FROM menu";
  $resultado = $conexion->query($sql);
	$fila = mysqli_fetch_assoc($resultado);
	$total = $conexion->rows($resultado);

if ($total>0) { ?>
	<?php do { ?>
		<tr>
            <td><?php echo $fila['id_menu']; ?></td>
            <td><?php echo $fila['menu']; ?></td>
            <td><?php echo $fila['precio']; ?></td>
            <td><a href="editarMenu.php?id=<?php  echo $fila['id_menu'];?>">editar</a></td>
            <td><a href="docs/eliminarMenu.php?id=<?php  echo $fila['id_menu'];?>">eliminar</a></td>
        </tr>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }

$conexion->liberar($resultado);
$conexion->close();
 ?>

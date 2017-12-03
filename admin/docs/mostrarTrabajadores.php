<?php
  // require_once 'aconfig/core.php';
  $conexion = new AConexion();

  $sql = "SELECT id_usuario,nombre,apellido,password,email FROM usuarios";
  $resultado = $conexion->query($sql);
	$fila = mysqli_fetch_assoc($resultado);
	$total = $conexion->rows($resultado);

if ($total>0) { ?>
	<?php do { ?>
		<tr>
            <td><?php echo $fila['id_usuario']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['apellido']; ?></td>

            <td><?php echo $fila['email']; ?></td>
            <td><a href="docs/eliminarTrabajador.php?id=<?php  echo $fila['id_usuario'];?>">eliminar</a></td>
        </tr>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
 ?>

<?php
  $conexion = new AConexion();

  $sql = "SELECT id_usuario,nombre,apellido,password,email FROM usuarios WHERE id_tipoUsuario = '2'";
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
            <td><a href="editarUsuario.php?id=<?php  echo $fila['id_usuario'];?>">editar</a></td>
            <td><a href="docs/eliminarUsuario.php?id=<?php  echo $fila['id_usuario'];?>">eliminar</a></td>
        </tr>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
$conexion->liberar($sql);
$conexion->close();
 ?>

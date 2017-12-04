<?php
  require_once '../uconfig/core.php';

  $conexion = new Conexion();

  $id = $_GET['comp'];

  $sql = $conexion->query("UPDATE pedido SET estado = 'Cancelada' WHERE codigoPedido = '$id'");

  if ($sql) {
    $mensaje = "<div class='logMsg-dang'><p>Tu pedido fue cancelado correctamente.</p></div>";
      header('location: ../compras.php?err='.$mensaje);
  } else {
    $mensaje = "<div class='logMsg-war'><p>Algo salio mal.</p></div>";
    header('location: ../compras.php?err='.$mensaje);
  }
 ?>

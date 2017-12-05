<?php
  require '../uconfig/core.php';

  $conexion = new Conexion();

  function generarCodigo($longitud, $tipo=0) {
      $codigo = "";
      $caracteres="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $max=strlen($caracteres)-1;
      for($i=0;$i < $longitud;$i++) {
          $codigo.=$caracteres[rand(0,$max)];
      }
      return $codigo;
  }
  $newCode = "PED_".generarCodigo(5);

  $sql = $conexion->query("SELECT codigoPedido FROM pedido WHERE codigoPedido = '$newCode'");

  if ($conexion->rows($sql) != 0) {
    $newCode = "PED_".generarCodigo(5);
  }

  $usuario = $_SESSION['app_id'];
  $fecha = date("d")."-".date("m")."-".date("Y")."-".date("H").":".date("i");

  if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];
    $total = 0;
    $sql_3 = $conexion->query("INSERT INTO pedido (id_usuario,codigoPedido,fecha,estado) VALUES ('$usuario','$newCode','$fecha','Pendiente')");
    if ($sql_3) {
      for($i=0;$i<count($datos);$i++){

        $idP = $datos[$i]['Id'];
        $cantidad = $datos[$i]['Cantidad'];
        $subtotal = $datos[$i]['Cantidad']*$datos[$i]['Precio'];
        $total = $subtotal + $total;
        $sql_2 = $conexion->query("INSERT INTO detalle_pedido (codigoPedido,id_producto,cantidad,subTotal) VALUES('$newCode','$idP','$cantidad','$subtotal')");
      }

      if ($sql_2) {
        $sql_4 = $conexion->query("UPDATE pedido SET total = '$total' WHERE codigoPedido = '$newCode';");
        if ($sql_4) {
          unset($_SESSION['carrito']);
          header('location: ../cart.php?cod='.$newCode);
        } else {
          header('location: ../cart.php?err=1');
        }
      } else {
        header('location: ../cart.php?err=2');
      }
    } else {
      header('location: ../cart.php');
    }
  }
$conexion->liberar($sql);
$conexion->close();
 ?>

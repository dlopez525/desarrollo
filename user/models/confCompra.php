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

  $sql = $conexion->query("SELECT codigoPedido FROM detalle_pedido WHERE codigoPedido = '$newCode'");

  if ($conexion->rows($sql) != 0) {
    $newCode = "PED_".generarCodigo(5);
  }

  $usuario = $_SESSION['app_id'];
  $fecha = date("d")."-".date("m")."-".date("Y");

  if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];

    for($i=0;$i<count($datos);$i++){
      $idP = $datos[$i]['Id'];
      $cantidad = $datos[$i]['Cantidad'];
      $subtotal = $datos[$i]['Cantidad']*$datos[$i]['Precio'];
      $sql_2 = $conexion->query("INSERT INTO detalle_pedido (codigoPedido,id_producto,id_usuario,cantidad,fecha,subtotal,estado) VALUES('$newCode','$idP','$usuario','$cantidad','$fecha','$subtotal','Pendiente')");
    }
    if ($sql_2) {
      unset($_SESSION['carrito']);
      header('location: ../cart.php?cod='.$newCode);
    } else {
      header('location: ../cart.php?err=1');
    }
  }

 ?>

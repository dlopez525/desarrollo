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
  $newCode = "MEN_".generarCodigo(5);

  $sql = $conexion->query("SELECT codigoMenu FROM detalle_menu WHERE codigoMenu = '$newCode'");

  if ($conexion->rows($sql) != 0) {
    $newCode = "MEN_".generarCodigo(5);
  }

  $usuario = $_SESSION['app_id'];
  $fecha = date("d")."-".date("m")."-".date("Y")."-".date("H").":".date("i");

  if(isset($_SESSION['menu'])){
    $datos=$_SESSION['menu'];
    $total = 0;
    $sql_3 = $conexion->query("INSERT INTO pedidomenu (codigoMenu,idUsuario,fecha,estado) VALUES ('$newCode','$usuario','$fecha','Pendiente')");
    if ($sql_3) {
      for($i=0;$i<count($datos);$i++){
        $idP = $datos[$i]['Id'];
        $cantidad = $datos[$i]['Cantidad'];
        $subtotal = $datos[$i]['Cantidad']*$datos[$i]['Precio'];
        $total = $subtotal + $total;
        $sql_2 = $conexion->query("INSERT INTO detalle_menu (codigoMenu,id_menu,cantidad,subtotal) VALUES('$newCode','$idP','$cantidad','$subtotal')");
      }
      if ($sql_2) {
        $sql_4 = $conexion->query("UPDATE pedidomenu SET total = '$total' WHERE codigoMenu = '$newCode';");
        if ($sql_4) {
          unset($_SESSION['menu']);
          header('location: ../cartM.php?cod='.$newCode);
        } else {
          header('location: ../cartM.php?err=1');
        }
      } else {
        header('location: ../cartM.php?err=2');
      }
    } else {
      header('location: ../cartM.php?err=3');
    }

  }

 ?>

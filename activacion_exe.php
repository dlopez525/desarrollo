<?php
  require 'config/core.php';

  if(isset($_GET['key'], $_SESSION['app_id'])) {
    $db = new Conexion();
    $id = $_SESSION['app_id'];
    $key = $db->real_escape_string($_GET['key']);
    $sql = $db->query("SELECT id_usuario FROM usuarios WHERE id_usuario='$id' AND cod_activacion='$key' LIMIT 1;");
    if($db->rows($sql) > 0) {
      $db->query("UPDATE usuarios SET cuenta='Enabled', cod_activacion='ok' WHERE id_usuario='$id';");
      header('Location: '.URL.'activacion.php?success-act=true');
    } else {
      header('Location: '.URL.'activacion.php?err-act=true');
    }
    $db->liberar($sql);
    $db->close();
  } else {
    header('Location: '.URL.'activacion.php?err-act=true');
  }
 ?>

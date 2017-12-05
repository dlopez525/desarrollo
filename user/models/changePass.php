<?php
  require '../uconfig/core.php';

  $conexion = new Conexion();

  $idU = $_SESSION['app_id'];
  $newPass = Encrypt($_POST['newPass_txt']);

  $sql = $conexion->query("UPDATE usuarios SET password = '$newPass' WHERE id_usuario = '$idU';");

  if ($sql) {
    unset($_SESSION['passReset']);
    $mensaje = "<div class='logMsg-succ'><p>Tu contraseña fue actualizada correctamente. Vuelve a Iniciar Sesión.</p></div>";
    header('location: ../changePas.php?err='.$mensaje.'&succ=1');
  } else {
    $mensaje = "<div class='logMsg-war'><p>Oops. Algo salió mal. Vuelve a intentarlo.</p></div>";
    header('location: ../changePas.php?err='.$mensaje);
  }

  $conexion->liberar($sql);
  $conexion->close();

 ?>

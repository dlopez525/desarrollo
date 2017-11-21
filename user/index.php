<?php
session_start();
  if (!isset($_SESSION['app_id'])) {
    unset($_SESSION['app_id'],$_SESSION['app_tipoU']);
    $mensaje = "<div class='logMsg-war'><p>Debes de Iniciar Sesion para ingresar a esta área.</p></div>";
    header('Location: '.URL.'login.php?err='.$mensaje);
  } elseif ($_SESSION['app_tipoU'] != 2) {
    $mensaje = "<div class='logMsg-dang'><p>No tienes los permisos para ingresar a esta área.</p></div>";
    header('Location: '.URL.'login.php?err='.$mensaje);
  }

  var_dump($_SESSION['app_id']);
 ?>
 <h1>Hola user</h1>
<a href="logout.php">Salir</a>

<?php require_once 'aconfig/core.php';

  if (!isset($_SESSION['app_id'])) {
    $mensaje = "<div class='logMsg-dang'><p>Debes de Iniciar Sesión</p></div>";
    header('Location: ../login.php?err='.$mensaje);
  } elseif ($_SESSION['app_tipoU'] != 1 && $_SESSION['app_tipoU'] != 3) {
    $mensaje = "<div class='logMsg-dang'><p>No tienes los permisos para entrar a esta sección.</p></div>";
    header('Location: ../login.php?err='.$mensaje);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ATITLE; ?> </title>
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>
